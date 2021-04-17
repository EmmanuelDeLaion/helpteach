<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    //Relacion 1 - n inversa
    public function user(){
        $this->belongsTo('App\Models\User');
    }

    public function course(){
        $this->belongsTo('App\Models\Course');
    }
    
}
