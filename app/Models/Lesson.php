<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    //***************************//
    //                           //
    //    RELACION DE 1 A 1      //
    //                           //
    //***************************//

    public function description(){
        return $this->hasOne('App\Models\Description');
    }


    //************************************//
    //                                    //
    //  RELACION DE 1 A MUCHOS INVERSA    //
    //                                    //
    //************************************//

    public function section (){
        return $this->BelongsTo('App\Models\Section');
    }

    public function platform(){
        return $this->belongsTo('App\Models\Platform');
    }


    //**********************************//
    //                                  //
    //  RELACION DE MUCHOS A MUCHOS     //
    //                                  //
    //**********************************//  

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    //************************************//
    //                                    //
    //    RELACION DE 1 A 1 POLIMORFICA   //
    //                                    //
    //************************************//

    public function resource(){
        return $this->morphOne('App\Models\Resource', 'resourseable');
    }


    //*****************************************//
    //                                         //
    //    RELACION DE 1 A MUCHOS POLIMORFICA   //
    //                                         //
    //*****************************************//

    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }


    public function reaction(){
        $this->morphMany('App\Models\Reaction', 'reactionable');
    }






}
