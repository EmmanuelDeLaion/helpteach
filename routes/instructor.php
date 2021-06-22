<?php

use App\Http\Controllers\Instructor\CourseController;
use App\Http\Livewire\InstructorCourses;
use Illuminate\Support\Facades\Route;

 
Route::redirect('', 'instructor/courses');

Route::resource('courses', CourseController::class )->names('courses');