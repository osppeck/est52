<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;

    protected $table='trabajador';
    public $timestamps=false;

    public function persona(){
        return $this->belongsTo('App\Models\Persona');
    }

    
    public function docente(){
        return $this->hasOne('App\Models\Docente');
    }

    //relación uno a muchos
    public function reportes(){
        return $this->hasMany('App\Models\Reportes');
    }

}
