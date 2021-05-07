<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class ShowCoursesCategory extends Component
{ 
    public function render()
    {
        $courses = Course::where('status', '2')->latest('id')->get();
        return view('livewire.show-courses-category', compact('courses'));
      
    }
}
