<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CoursesStudents extends Component
{

    use AuthorizesRequests;
    use WithPagination;
    public $course;
    public $search;

    public function mount(Course $course){
        $this->course = $course;
        
        $this->authorize('dicatated', $course);

    }

    public function render()
    {
        $students = $this->course->students()
                                ->where('name', 'LIKE', '%'. $this->search . '%' )
                                ->paginate(4);
        return view('livewire.instructor.courses-students', compact('students'))->layout('layouts.instructor', ['course' => $this->course]);
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
