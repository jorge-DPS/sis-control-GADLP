<?php

namespace App\Livewire\Admin\Personal;

use App\Models\User;
use Livewire\Component;

class StaffIndex extends Component
{
    public function render()
    {
        $users = User::with('userType')  // Eager load de la relación 'typeUser'
            ->where('user_type_id', 2)  // Filtrar por el tipo de usuario
            ->get();
        return view('livewire.admin.personal.staff-index', [
            'users' => $users,
        ]);
    }
}
