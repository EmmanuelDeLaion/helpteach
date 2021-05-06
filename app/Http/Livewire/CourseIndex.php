<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

use App\Models\Category;
use App\Models\Level;
use App\Models\Platform;

class CourseIndex extends Component
{
    public function render(){
        
        $categories = Category::all();
        $levels = Level::all();
        $platforms = Platform::all();
        $courses = Course::where('status',3)->latest('id')->paginate(8);
        
        return view('livewire.course-index', compact('courses', 'categories', 'levels', 'platforms') );
    }
}
