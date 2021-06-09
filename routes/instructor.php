<?php

use App\Http\Livewire\InstructorCourses;
use Illuminate\Support\Facades\Route;

 
Route::get('courses', InstructorCourses::class)->name('course.index');

Route::redirect('', 'instructor/courses', 301);