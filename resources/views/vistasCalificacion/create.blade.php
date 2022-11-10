@extends('adminlte::page')

@section('title', 'CREATE_CALIFICACION')

@section('content_header')

<h1>ASIGNAR_CALIFICACIÓN</h1>

@stop

@section('content')
    <!-- un submit activa automaticamnte  el metodo store() en el controlador que invoca, NO SE LLAMA-->
    <form action="/calificaciones" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Periodo: </label>
            <input type="number" class="form-control" name="periodo" id="periodo" >
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Extraordinario: </label>
            <input type="text" class="form-control" id="examenR" name="examenR">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Calificacion: </label>
            <input type="text" class="form-control" id="calificacion" name="calificacion">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Faltas: </label>
            <input type="number" class="form-control" id="faltas" name="faltas">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Alumno: </label>
            <input type="text" class="form-control" id="alumno_id" name="alumno_id">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Clase: </label>
            <input type="text" class="form-control" id="clase_id" name="clase_id">
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