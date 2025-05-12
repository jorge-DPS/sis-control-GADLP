<?php

namespace App\Http\Controllers\Admin\assignment;

use App\Http\Controllers\Controller;
use App\Models\Admin\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    //
    public function index()
    {
        //
        return view('admin.assignment.index');
    }

    public function create()
    {
        //
        return view('admin.assignment.create');
    }

    public function edit(Assignment $assignment){
        // dd($assignment);
        return view('admin.assignment.edit',[
            "assignment" => $assignment,        ]);
    }
}
