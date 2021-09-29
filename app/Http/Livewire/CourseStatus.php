<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Auth\Middleware\Authorize;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CourseStatus extends Component
{
    use AuthorizesRequests;

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

        if(!$this->current){
            $this->current = $course->lessons->last();
        }

        $this->authorize('enrolled', $course);
        
    }

    public function render(){
        return view('livewire.course-status');
    }

    public function completed(){
        if($this->current->completed){
            $this->current->users()->detach(auth()->user()->id);
        }else{
            $this->current->users()->attach(auth()->user()->id);
        }
        $this->current = Lesson::find($this->current->id);
        $this->course = Course::find($this->course->id);
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


    public function getAdvanceProperty(){
        $i = 0;
        $advance = 0;
        foreach($this->course->lessons as $lesson){
            if($lesson->completed){
                $i++;
            }
        }
        $advance = ($i * 100)/($this->course->lessons->count());
        
        return round($advance, 2);
    }


    
    public function downloadDiploma(){
        return response()->download( storage_path('app/public/diploma/prueba-diploma.png') );
    }




}
