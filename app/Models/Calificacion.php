<?php

namespace App\Models;
use App\Models\Calificacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HasFactory;
    protected $table='calificacion';

    public function alumno(){
        return $this->belongsTo('App\Models\Alumno');
    }

    public function clase(){
        return $this->belongsTo('App\Models\Clase');
    }
}
