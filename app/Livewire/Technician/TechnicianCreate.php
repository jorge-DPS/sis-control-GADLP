<?php

namespace App\Livewire\Technician;

use App\Models\Admin\TechnicalAssignment;
use Livewire\Component;

class TechnicianCreate extends Component
{
    public function render()
    {
        $userId = auth()->id(); // técnico logueado
        $assignments = TechnicalAssignment::with([
            'assignment.lugar',
            'assignment.administrador',
        ])
        ->where('id_technical', $userId)
        ->latest()
        ->get();
        return view('livewire.technician.technician-create', [
            'assignments' => $assignments,
        ]);
    }
}
