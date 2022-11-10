<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $table = 'grupo';

    //relaciión uno a muchos

    public function alumnos(){
        return $this->hasMany('App\Models\Alumno');
    }

    public function clases(){
        return $this->hasMany('App\Models\Clase');
    }
}
