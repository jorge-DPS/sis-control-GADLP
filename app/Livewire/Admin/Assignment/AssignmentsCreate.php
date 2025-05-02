<?php

namespace App\Livewire\Admin\Assignment;

use App\Models\Admin\Branch;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AssignmentsCreate extends Component
{

    public $id_branch;

    protected $rules = [
        'id_branch' => 'required'
    ];

    public function createAssignment()
    {
        $datos = $this->Validate();
        dd($datos);
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
