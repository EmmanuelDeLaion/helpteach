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
}
