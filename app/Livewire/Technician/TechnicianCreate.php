<?php

namespace App\Livewire\Technician;

use App\Models\Admin\TechnicalAssignment;
use App\Models\Technical\Task;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class TechnicianCreate extends Component
{

    use  WithPagination;

    public $technicalAssignment;
    public $descripcion = '';
    public $observaciones = '';

    protected $rules = [
        'descripcion' => 'required|min:5',  // Validación para que la descripción no esté vacía
        'observaciones' => 'nullable|string'
    ];

    public function mount()
    {
        $this->descripcion = '';
    }

    public function resetForm()
    {
        // Método específico para Livewire 3
        $this->reset('descripcion', 'observaciones');
    }

    public function createTask()
    {
        $datos = $this->validate();
        $datos['id_technical_assignment'] = $this->technicalAssignment->id;
        $datos['state'] = 'pendiente';

        // Crear la tarea
        Task::create($datos);

        // Resetear los campos (método específico de Livewire 3)
        $this->reset(['descripcion', 'observaciones']);

        // Limpiar los campos con reset

        // Emitir evento para JavaScript - ahora usamos dispatch en lugar de emit
        $this->dispatch('taskCreated');
    }

    public function deleteTask(Task $task)
    {
        // Eliminar la tarea pasada como modelo
        $task->delete();

        // Mostrar mensaje de éxito
        session()->flash('message', 'Tarea eliminada con éxito.');
    }

    public function marcarButton($id_task)
    {
        // Encontrar la tarea por su ID
        $task = Task::find($id_task);

        // Verifica si la tarea fue encontrada antes de intentar actualizar
        if ($task) {
            // Actualiza el campo 'state' a 'completada'
            $task->update(['state' => 'completada']);
        }

        // Para depurar, ver el estado actualizado de la tarea
    }
    public function render()
    {

        $userId = auth()->id();

        // Obtener el usuario con todas sus tareas de forma optimizada
        $user = User::with('tareas')->find($userId);

        // Obtener tareas activas del usuario
        // $tasks = $user->load(['tareas' => function ($query) {
        //     $query->where('tasks.state', 'completada');
        // }])->tareas;

        $tasks = $user->tareas()->paginate(6);



        return view('livewire.technician.technician-create', [
            'tasks' => $tasks,
        ]);
    }
}
