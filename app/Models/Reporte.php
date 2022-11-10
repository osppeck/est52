<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;
    protected $table='reporte';
    public $timestamps=false;

    //relaciones inversas uno a muchos
    public function trabajador(){
        return $this->belongsTo('App\Models\Trabajador');
    }

    public function alumno(){
        return $this->belongsTo('App\Models\Alumno');
    }
}
