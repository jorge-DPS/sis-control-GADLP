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
        // dd($assignments);
        return view('technician.index');
    }

    public function create(){
        return view('technician.create');
    }
}
