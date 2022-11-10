<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table='alumno';
    public $timestamps=false;

    public function persona(){
        return $this->belongsTo('App\Models\Persona');
    }

    //relación uno a muchos inverssa
    public function tutor(){
        return $this->belongsTo('App\Models\Tutor');
    }

    public function grupo(){
        return $this->belongsTo('App\Models\Grupo');
    }

    //relacion uno a muchos
    public function reportes(){
        return $this->hasMany('App\Models\Reporte');
    }

    public function calificaciones(){
        return $this->hasMany('App\Models\Calificacion');
    }
    
}
