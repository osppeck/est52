@extends('adminlte::page')

@section('title', 'UPDATE_CALIFICACION')

@section('content_header')
    <h1>Editar calificación</h1>
@stop

@section('content')
        <!-- un submit activa automaticamnte el metodo UPDATE()en el controlador NO SE LLAMA-->
    <form action="/calificaciones/{{ $calificacion->id}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="" class="form-label">Periodo: </label>
            <input type="text" class="form-control" name="periodo" id="periodo" value="{{ $calificacion->periodo }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Examen Extraordinario: </label>
            <input type="text" class="form-control" id="examenR" name="examenR" value="{{ $calificacion->examenR }}">
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Calificacion: </label>
            <input type="text" class="form-control" id="calificacion" name="calificacion" value="{{ $calificacion->calificacion }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Faltas: </label>
            <input type="text" class="form-control" id="faltas" name="faltas" value="{{ $calificacion->faltas }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Alumno: </label>
            <input type="number" class="form-control" id="alumno_id" name="alumno_id" value="{{ $calificacion->alumno_id }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Clase: </label>clase_id
            <input type="number" class="form-control" id="clase_id" name="clase_id" value="{{ $calificacion->clase_id }}">
        </div>

        <a href="/calificaciones" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop