<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApprovedCourse;
use App\Mail\RejectCourse;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class CourseController extends Controller
{


    public function index(){
        $courses = Course::where('status', 2)
            ->paginate();
        return view('admin.courses.index', compact('courses'));
    }


    public function show(Course $course){
        $this->authorize('revision', $course);
        return view('admin.courses.show', compact('course'));
    }


    public function approved(Course $course){

        if (!$course->lessons || !$course->goals || !$course->description || !$course->requirements || !$course->image) {
            return back()->with('info', 'No se puede aprobar este curso porque faltan agregar más información');
        }

        $course->status = 3;
        $course->save();

        // Enviar correo 
        $mail = new ApprovedCourse($course);
        Mail::to($course->teacher->email)->queue($mail);

        return redirect()->route('admin.courses.index')->with('info-approved', 'El curso fue aprobado correctamente');
    }



    public function observation(Course $course){
        return view('admin.courses.observation', compact('course'));
    }


    public function reject(Request $request,  Course $course){

        $request->validate([
            'body'=>'required'
        ]);

        $course->observation()->create($request->all());

        $course->status = 1;
        $course->save();
 
        $mail = new RejectCourse($course);
        Mail::to($course->teacher->email)->queue($mail);

        return redirect()->route('admin.courses.index')->with('info-reject', 'El curso fue rechazado ☹');
    }
}
