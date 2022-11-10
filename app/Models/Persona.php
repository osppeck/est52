<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table='persona';

    //relación uno a uno
    public function tutor(){
        return $this->hasOne('App\Models\Tutor');
    }
    public function trabajador(){
        return $this->hasOne('App\Models\Trabajador');
    }
    public function alumno(){
        return $this->hasOne('App\Models\Alumno');
    }


    
}
