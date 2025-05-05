<?php

namespace App\Livewire\Admin\Assignment;

use App\Models\Admin\Assignment;
use App\Models\Admin\Branch;
use App\Models\Admin\TechnicalAssignment;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

class AssignmentsCreate extends Component
{

    public $id_branch;
    public $description_problem;

    public array $selected_technicians = [];

    protected $rules = [
        'id_branch' => 'required|numeric',
        'description_problem' => 'required|string',
    ];

    public function createAssignment()
    {
        $datos = $this->validate();
        $datos['id_admin'] = auth()->id();
        $datos['fecha_asignacion'] = !empty($this->selected_technicians) ? now() : null;

        // Estado depende de si hay técnicos
        $datos['state'] = !empty($this->selected_technicians) ? 'asignada' : 'pendiente';

        // 1. Crear la asignación principal
        $assignment = Assignment::create($datos);

        // 2. Si hay técnicos, crear asignaciones técnicas relacionadas
        foreach ($this->selected_technicians as $technicianId) {
            TechnicalAssignment::create([
                'id_assignments' => $assignment->id,
                'id_technical' => $technicianId,
                'state' => 'asignado',
            ]);

            $technician = User::find($technicianId);
            if ($technician) {
                $technician->update(['state' => 'inactivo']);
            }

        }

        // 3. Reset opcional
        $this->reset(['selected_technicians']);
        session()->flash('message', 'Asignación creada correctamente.');
        return redirect()->route('asignaciones.index');

    }

    public function render()
    {
        $technicians = User::with('userType')  // Eager load de la relación 'typeUser'
            ->where('user_type_id', 2)  // Filtrar por el tipo de usuario
            ->get();

        $branches = Branch::all();
        return view('livewire.admin.assignment.assignments-create', [
            'technicians' => $technicians,
            'branches' => $branches,
        ]);
    }
}
