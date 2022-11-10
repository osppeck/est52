@extends('adminlte::page')

@section('title', 'UPDATE_CLASE')

@section('content_header')
    <h1>Editar clase</h1>
@stop

@section('content')
        <!-- un submit activa automaticamnte el metodo UPDATE()en el controlador NO SE LLAMA-->
    <form action="/clases/{{ $clase->id}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="" class="form-label">HORA DE INICIO: </label>
            <input type="time" class="form-control" name="horaE" id="horaE" value="{{ $clase->horaE }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">HORA DE FINALIZACIÓN: </label>
            <input type="time" class="form-control" id="horaS" name="horaS" value="{{ $clase->horaS }}">
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Días: </label>
            <input type="text" class="form-control" id="dias" name="dias" value="{{ $clase->dias }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Fecha: </label>
            <input type="text" class="form-control" id="docente_id" name="docente_id" value="{{ $clase->docente_id }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Materia: </label>
            <input type="number" class="form-control" id="materia_id" name="materia_id" value="{{ $clase->materia_id }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Grupo: </label>
            <input type="number" class="form-control" id="grupo_id" name="grupo_id" value="{{ $clase->grupo_id }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Aula: </label>
            <input type="number" class="form-control" id="aula_id" name="aula_id" value="{{ $clase->aula_id }}">
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