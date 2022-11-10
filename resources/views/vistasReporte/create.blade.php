@extends('adminlte::page')

@section('title', 'CREATE_REPORTE')

@section('content_header')

<h1>CREAR NUEVO REPORTE</h1>

@stop

@section('content')
    <!-- un submit activa automaticamnte  el metodo store() en el controlador que invoca, NO SE LLAMA-->
    <form action="/reportes" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Puntaje: </label>
            <input type="number" class="form-control" name="puntaje" id="puntaje" >
            <div id="leyendaNombre" class="form-text">puntos de reporte: </div>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Asunto: </label>
            <input type="text" class="form-control" id="asunto" name="asunto">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Observaciones: </label>
            <input type="text" class="form-control" id="observaciones" name="observaciones">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Fecha de nacimiento: </label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Alumno: </label>
            <input type="text" class="form-control" id="alumno_id" name="alumno_id">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Trabajador: </label>
            <input type="text" class="form-control" id="trabajador_id" name="trabajador_id">
        </div>
        
        
        <a href="/reportes" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop