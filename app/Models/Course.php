<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = ['id', 'status'];


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
  
    public function level(){
        return $this->belongsTo('App\Models\Level');
    }

    public function category(){
        return $this->belongsTo('App\Models\Level');
    }

    public function price(){
        return $this->belongsTo('App\Models\Level');
    }

    //**********************************//
    //                                  //
    //  RELACION DE MUCHOS A MUCHOS     //
    //                                  //
    //**********************************//   

    public function students(){
        return $this->belongsToMany('App\Models\User');
    }


    //************************************//
    //                                    //
    //    RELACION DE 1 A 1 POLIMORFICA   //
    //                                    //
    //************************************//

    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }


    public function lessons(){
        return $this->HasManyThrough('App\Models\Lesson','App\Models\Section');
    }




}
