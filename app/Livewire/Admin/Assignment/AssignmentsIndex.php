<?php

namespace App\Livewire\Admin\Assignment;

use App\Models\Admin\Assignment;
use Livewire\Component;

class AssignmentsIndex extends Component
{
    public function render()
    {
        $assignments = Assignment::with(['lugar', 'administrador', 'tecnicosAsignados'])->get();

// dd($assignments);

        return view('livewire.admin.assignment.assignments-index', [
            'assignments' => $assignments,
        ]);
    }
}
