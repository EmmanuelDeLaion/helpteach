<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class HomeController extends Controller
{

    public function __invoke()
    {
        // recuperar el registro de los cursos 
        $courses = Course::where('status','3')->latest('id')->get();
        // return Course::find(2)->rating;
        return view('welcome', compact('courses'));
    }
}
