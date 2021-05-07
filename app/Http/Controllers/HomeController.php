<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class HomeController extends Controller
{
    // $courses = Course::all();
    // return $courses;
    // return Course::find(2)->rating;

    public function __invoke(){
         return view('welcome');
 
    }




}
