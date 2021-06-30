<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Course;
use App\Models\Requirement;
use Livewire\Component;

class CoursesRequirements extends Component
{

    public $course;
    public $requirement;
    public $name;

    protected $rules = [
        'requirement.name' => 'required'
    ];

    public function mount(Course $course){
        $this->course = $course;
        $this->requirement = new Requirement();
    }
    
    public function render()
    {
        return view('livewire.instructor.courses-requirements');
    }


    
    public function edit(Requirement $requirement){
        $this->requirement = $requirement;
    }

    public function update(){
        $this->validate();
        $this->requirement->save();

        $this->requirement = new Requirement();
        $this->course = Course::find($this->course->id);
    }

    public function destroy(Requirement $requirement){
        $requirement->delete();
        $this->course = Course::find($this->course->id);
    }

    public function store(){
        $this->validate([
            'name' => 'required'
        ]);
        $this->course->requirements()->create([
            'name' => $this->name
        ]);
        $this->reset('name');
        $this->course = Course::find($this->course->id);

    }

}
