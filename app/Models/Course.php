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


    //******************************//
    //                              //
    //  RELACION DE 1 A MUCHOS      //
    //                              //
    //******************************//
    public function reviews(){
        return $this->hasMany('App\Models\Review');
    }

    public function requirements(){
        return $this->hasMany('App\Models\Requirement');
    }

    public function goals(){
        return $this->hasMany('App\Models\Goal');
    }

    public function audiences(){
        return $this->hasMany('App\Models\Audience');
    }

    public function sections(){
        return $this->hasMany('App\Models\Section');
    }


    //************************************//
    //                                    //
    //  RELACION DE 1 A MUCHOS INVERSA    //
    //                                    //
    //************************************//
    public function teacher(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function students(){
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
