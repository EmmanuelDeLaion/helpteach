<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeAnInstructorController extends Controller
{
    public function index(){
        return view('be-an-instructor.index');
    }
}
