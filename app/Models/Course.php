<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //constantes para el estado del curso
    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    //Relacion 1 - n
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    //Relacion 1 - n inversa
    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function students()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function level(){
        return $this->belongsTo('App\Models\Level');
    }

    public function category(){
        return $this->belongsTo('App\Models\Level');
    }

    public function price(){
        return $this->belongsTo('App\Models\Level');
    }
}
