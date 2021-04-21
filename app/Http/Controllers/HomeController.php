<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;


class HomeController extends Controller
{

    public function __invoke()
    {
        // recuperar el registro de los cursos donde el status sea 3 o sea publicados
        $courses = Course::where('status', '3')->get();

        return $courses;
        return view('welcome');
    }
}
