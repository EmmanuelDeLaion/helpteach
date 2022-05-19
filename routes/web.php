<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Livewire\CourseStatus;
use App\Http\Controllers\PrivacyPoliciesController;
use App\Http\Controllers\FrequentQuestionController;
use App\Http\Controllers\PaymentOptionsController;
use App\Http\Controllers\BeAnInstructorController;
use App\Http\Controllers\WebSystemsController;



use App\Models\Course;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get(
    '/',
    HomeController::class
)->name('home');


Route::middleware(
    ['auth:sanctum', 'verified']
)->get(
    '/dashboard',
    function () {
        return view('dashboard');
    }
)->name('dashboard');


Route::get(
    'cursos',
    [CourseController::class, 'index']
)->name('courses.index');


Route::get(
    'cursos/{course}',
    [CourseController::class, 'show']
)->name('courses.show');


Route::get(
    'blog',
    [BlogController::class, 'index']
)->name('blogs.index');


Route::get(
    'about',
    [AboutController::class, 'index']
)->name('about.index');


Route::post(
    'courses/{course}/enrolled',
    [CourseController::class, 'enrolled']
)->middleware('auth')->name('courses.enrolled');



Route::get(
    'course-status/{course}',
    CourseStatus::class
)->name('courses.status')->middleware('auth');


Route::get(
    'privacy-policies',
    [PrivacyPoliciesController::class, 'index']
)->name('privacy-policies.index');


Route::get(
    'frequent-questions',
    [FrequentQuestionController::class, 'index']
)->name('frequent-questions.index');


Route::get(
    'payment-options',
    [PaymentOptionsController::class, 'index']
)->name('payment-options.index');


Route::get(
    'be-an-instructor',
    [BeAnInstructorController::class, 'index']
)->name('be-an-instructor.index');


Route::get(
    'web-system',
    [WebSystemsController::class, 'index']
)->name('web-system.index');
