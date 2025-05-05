<?php

namespace App\Http\Controllers\Technician;

use App\Http\Controllers\Controller;
use App\Models\Admin\TechnicalAssignment;
use App\Models\Technical\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //



    public function index()
    {

        $userId = auth()->id(); // técnico logueado

        $assignments = TechnicalAssignment::with([
            'assignment.lugar',
            'assignment.administrador',
        ])
        ->where('id_technical', $userId)
        ->latest()
        ->get();

            // dd($assignments);
        return view('technician.index', [
            'assignments' => $assignments
        ]);
    }
}
