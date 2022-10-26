<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//1. crear el modelo, el 0 es hacer la migración

class Materia extends Model
{
    use HasFactory;
    //ajustamos el nombre de la tabla que representa
    protected $table='materia';
    //desactivamos los timestaps, no amerita
    public $timestamps=false;
}
