<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class ShowCoursesHome extends Component
{
    public function render()
    {
        $courses = Course::where('status', '3')->latest('id')->get()->take(3);
        return view('livewire.show-courses-home', compact('courses'));
      
    }

    
    
}
