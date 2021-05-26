<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Lesson;
use Livewire\Component;

class CourseStatus extends Component
{
    public $course;
    public $current;
    public $index;
    public $previous;
    public $next;

    public function mount(Course $course){
        $this->course = $course;
        // itera todas las lecciones del curso sobre el usuario ingresado y verifica si la leccion esta terminada o no 
        // si la leccion se encuentra terminada entonces retornara el valor del aributo como verdadera 
        // si la leccion no esta terminada entonces el retorno del atributo es falso y por lo tanto se rompera el bucle
        foreach ($course->lessons as $lesson) {
            if (!$lesson->completed) {
                $this->current = $lesson;

                // indice 
                // encuentra el registro que coincida y devuelve el indice 
                $this->index = $course->lessons->search($lesson);

                $this->previous = $course->lessons[$this->index - 1];
                $this->next = $course->lessons[$this->index + 1];

                break;
            }
        }
    }

    public function render()
    {
        return view('livewire.course-status');
    }

    public function changeLesson(Lesson $lesson){
        $this->current = $lesson;
    }
}
