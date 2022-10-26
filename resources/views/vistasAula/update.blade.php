@extends('adminlte::page')

@section('title', 'UPDATE_GRUPOS')

@section('content_header')
    <h1>EDITAR AULA</h1>
@stop

@section('content')
        <!-- un submit activa automaticamnte el metodo UPDATE()en el controlador NO SE LLAMA-->
    <form action="/aulas/{{ $aula->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" value="{{ $aula->nombre }}">
            <div id="leyendaNombre" class="form-text">nombre o tag para identificar el aula</div>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Comentarios</label>
            <input type="text" class="form-control" id="comentarios" name="comentarios" value="{{ $aula->comentarios }}">
        </div>
        
        
        <a href="/aulas" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop