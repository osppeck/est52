@extends('adminlte::page')

@section('title', 'UPDATE_GRUPOS')

@section('content_header')
    <h1>CREAR NUEVO GRUPO</h1>
@stop

@section('content')

    <form action="/grupos/{{ $grupo->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" value="{{ $grupo->nombre }}">
            <div id="leyendaNombre" class="form-text">nombre o tag para identificar el grupo</div>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Ciclo escolar</label>
            <input type="text" class="form-control" id="ciclo" name="ciclo" value="{{ $grupo->ciclo }}">
        </div>
        
        
        <a href="/grupos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop