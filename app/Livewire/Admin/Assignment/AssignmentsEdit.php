<?php

namespace App\Livewire\Admin\Assignment;

use App\Models\Admin\Assignment;
use App\Models\Admin\Branch;
use App\Models\Admin\TechnicalAssignment;
use App\Models\User;
use Livewire\Component;

class AssignmentsEdit extends Component
{
    public $assignment;
    public $id_branch;
    public $description_problem;

    public array $selected_technicians = [];

    protected $rules = [
        'id_branch' => 'required|numeric',
        'description_problem' => 'required|string',
    ];

    public function mount(Assignment $assignment)
    {
        $this->id_branch = $assignment->id_branch;
        $this->description_problem = $assignment->description_problem;
    }

    public function removeTechnician(User $user)
    {
        // Cambiar el estado del técnico a 'activo'

        // Eliminar la relación del técnico de la asignación específica (id = 1)
        $technicalAssignment = TechnicalAssignment::where('id_assignments', $this->assignment->id)
            ->where('id_technical', $user->id)
            ->first();

        if ($technicalAssignment) {
            // Eliminar el registro de la tabla technical_assignments
            $technicalAssignment->delete();

            // Mensaje de éxito
            session()->flash('message', 'El técnico ha sido retirado de la asignación.');
        }

        $user->update(['state' => 'activo']);
        // Puedes añadir un mensaje de éxito o cualquier lógica adicional aquí
        session()->flash('message', 'El técnico ha sido reactivado correctamente.');
    }

    public function updateAssignment() {

        // Validar los datos
        $datos = $this->validate();

        $datos['state'] = !empty($this->selected_technicians) ? 'asignada' : 'pendiente';

        // Actualizar la asignación principal
        $this->assignment->update($datos);

        // Eliminar las asignaciones anteriores (si es necesario)
        TechnicalAssignment::where('id_assignments', $this->assignment->id)->delete();

        // Si hay técnicos seleccionados, asignarlos a la asignación
        foreach ($this->selected_technicians as $technicianId) {
            // Crear o actualizar la asignación técnica del nuevo técnico
            TechnicalAssignment::create([
                'id_assignments' => $this->assignment->id,
                'id_technical' => $technicianId,
                'state' => 'asignado', // Cambiar el estado según lo que sea necesario
            ]);

            // Cambiar el estado del técnico a 'inactivo'
            $technician = User::find($technicianId);
            if ($technician) {
                $technician->update(['state' => 'inactivo']);
            }
        }

        return redirect()->route('asignaciones.index');
    }

    public function render()
    {
        // dd($this->assignment);
        $branches = Branch::all();
        $inactiveTechnicians = User::whereHas('asignacionesTecnico', function ($query) {
            $query->where('id_assignments', $this->assignment->id)  // Filtrar por la asignación con id = 1
                ->where('state', 'asignado');  // Filtrar solo los técnicos que están asignados
        })
            ->where('state', 'inactivo')  // Filtrar solo los técnicos inactivos
            ->where('user_type_id', 2)  // Filtrar solo los usuarios que son técnicos (user_type_id = 2)
            ->get();

        $activeTechnicians = User::with('userType')  // Eager load de la relación 'userType'
            ->where('user_type_id', 2)  // Filtrar por el tipo de usuario
            ->where('state', 'activo')  // Filtrar solo usuarios activos
            ->get();

        return view('livewire.admin.assignment.assignments-edit', [
            'branches' => $branches,
            'inactiveTechnicians' => $inactiveTechnicians,
            'activeTechnicians' => $activeTechnicians,
        ]);
    }
}
