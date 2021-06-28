<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;

class Statistics extends Component
{


    public function render()
    {
        $users = User::count();
        $courses = Course::count();
        $lessons = Lesson::count();
        return view('livewire.statistics', compact('courses','lessons','users'));
    }
}
