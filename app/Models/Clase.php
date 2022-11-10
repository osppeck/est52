<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;
    protected $table='clase';
    public $timestamps=false;


    public function materia(){
        return $this->belongsTo('App\Models\Materia');
    }


    public function aula(){
        return $this->belongsTo('App\Models\Aula');
    }

    public function docente(){
        return $this->belongsTo('App\Models\Docente');
    }

    public function grupo(){
        return $this->belongsTo('App\Models\Grupo');
    }

    //uno a muchos,
    public function calificaciones(){
        return $this->hasMany('App\Models\Calificacion');
    }

}
