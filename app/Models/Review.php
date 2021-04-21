<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    //************************************//
    //                                    //
    //  RELACION DE 1 A MUCHOS INVERSA    //
    //                                    //
    //************************************//
    
    public function user(){
        $this->belongsTo('App\Models\User');
    }

    public function course(){
        $this->belongsTo('App\Models\Course');
    }
    
}
