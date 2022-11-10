<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $table='docente';
    public $timestamps=false;

    public function trabajador(){
        return $this->belongsTo('App\Models\Trabajador');
    }

    public function clases(){
        return $this->hasMany('App\Models\Clase');
    }
}
