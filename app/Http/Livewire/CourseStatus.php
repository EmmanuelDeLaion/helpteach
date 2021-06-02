<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Lesson;
use Livewire\Component;

class CourseStatus extends Component
{
    public $course;
    public $current;

    public function mount(Course $course){
        $this->course = $course;
        // itera todas las lecciones del curso sobre el usuario ingresado y verifica si la leccion esta terminada o no 
        // si la leccion se encuentra terminada entonces retornara el valor del aributo como verdadera 
        // si la leccion no esta terminada entonces el retorno del atributo es falso y por lo tanto se rompera el bucle
        // se determina la leccion actual 
        foreach ($course->lessons as $lesson) {
            if (!$lesson->completed) {
                $this->current = $lesson;
                break;
            }
        }
    }

    public function render(){
        return view('livewire.course-status');
    }

    // cambiamos la leccion actual 
    public function changeLesson(Lesson $lesson){
        $this->current = $lesson;
    }

    // esto sirve para calcular el indice 
    public function getIndexProperty(){
        return $this->course->lessons->pluck('id')->search($this->current->id);
    }

    // aqui calculamos la propiedad anterior y siguiente 
    public function getPreviousProperty(){
        if ($this->index == 0) {
            return null;
        } else {
            return $this->course->lessons[$this->index - 1];
        }
    }

    public function getNextProperty(){
        if ($this->index == $this->course->lessons->count() - 1) {
            return null;
        } else {
            return $this->course->lessons[$this->index + 1];
        }
    }


}
