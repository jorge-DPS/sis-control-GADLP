<?php

namespace App\Livewire\Technician;

use App\Models\Admin\TechnicalAssignment;
use App\Models\Technical\Task;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TechnicianCreate extends Component
{

    public $technicalAssignment;
    public $descripcion;
    public $observaciones;

    protected $rules = [
        'descripcion' => 'required|min:5',  // Validación para que la descripción no esté vacía
        'observaciones' => 'nullable|string'
    ];

    public function createTask()
    {
        $datos = $this->validate();
        $datos['id_technical_assignment'] = $this->technicalAssignment->id;
        $datos['state'] = 'pendiente';

        Task::create($datos);

        $this->reset('descripcion', 'observaciones');

    }
    public function render()
    {
        $tasks = Task::all();
        return view('livewire.technician.technician-create');
    }
}
