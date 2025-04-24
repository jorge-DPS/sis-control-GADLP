<?php

namespace App\Http\Controllers\Admin\assignment;

use App\Http\Controllers\Controller;
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
}
