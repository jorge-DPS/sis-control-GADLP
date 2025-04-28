<?php

namespace App\Livewire\Admin\Assignment;

use App\Models\User;
use Livewire\Component;

class AssignmentsCreate extends Component
{
    public function render()
    {
        $users = User::with('userType')  // Eager load de la relación 'typeUser'
            ->where('user_type_id', 2)  // Filtrar por el tipo de usuario
            ->get();
        return view('livewire.admin.assignment.assignments-create', [
            'users' => $users,
        ]);
    }
}
