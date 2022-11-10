@extends('adminlte::page')

@section('title', 'UPDATE_REPORTE')

@section('content_header')
    <h1>Editar reporte</h1>
@stop

@section('content')
        <!-- un submit activa automaticamnte el metodo UPDATE()en el controlador NO SE LLAMA-->
    <form action="/reportes/{{ $reporte->id}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="" class="form-label">puntaje: </label>
            <input type="text" class="form-control" name="puntaje" id="puntaje" value="{{ $reporte->puntaje }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Asunto: </label>
            <input type="text" class="form-control" id="asunto" name="asunto" value="{{ $reporte->asunto }}">
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Observaciones: </label>
            <input type="text" class="form-control" id="observaciones" name="observaciones" value="{{ $reporte->observaciones }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Fecha: </label>
            <input type="text" class="form-control" id="fecha" name="fecha" value="{{ $reporte->fecha }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Alumno: </label>
            <input type="number" class="form-control" id="alumno_id" name="alumno_id" value="{{ $reporte->alumno_id }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Prefecto: </label>
            <input type="number" class="form-control" id="trabajador_id" name="trabajador_id" value="{{ $reporte->trabajador_id }}">
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