<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $table='tutor';
    public $timestamps=false;

    public function persona(){
        return $this->belongsTo('App\Models\Persona');
    }

    //relaciión uno a muchos

    public function alumnos(){
        return $this->hasMany('App\Models\Alumno');
    }
    
}
