@extends('adminlte::page')

@section('title', 'CREATE_CLASE')

@section('content_header')

<h1>CREAR NUEVA CLASE</h1>

@stop

@section('content')
    <!-- un submit activa automaticamnte  el metodo store() en el controlador que invoca, NO SE LLAMA-->
    <form action="/clases" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Hora de inicio: </label>
            <input type="time" class="form-control" name="horaE" id="horaE" >
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Hora de finalización: </label>
            <input type="time" class="form-control" id="horaS" name="horaS">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Días (L,M,W,J,V,S): </label>
            <input type="text" class="form-control" id="dias" name="dias">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Docente: </label>
            <input type="text" class="form-control" id="docente_id" name="docente_id">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Materia: </label>
            <input type="text" class="form-control" id="materia_id" name="materia_id">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Grupo: </label>
            <input type="text" class="form-control" id="grupo_id" name="grupo_id">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Aula: </label>
            <input type="text" class="form-control" id="aula_id" name="aula_id">
        </div>
        
        
        <a href="/clases" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop