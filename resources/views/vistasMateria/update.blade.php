@extends('adminlte::page')

@section('title', 'UPDATE_MATERIAS')

@section('content_header')
    <h1>CREAR NUEVA AULA</h1>
@stop

@section('content')
        <!-- un submit activa automaticamnte el metodo UPDATE()en el controlador NO SE LLAMA-->
    <form action="/materias/{{ $materia->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" 
            class="form-control" 
            name="nombre" 
            id="nombre" 
            aria-describedby="emailHelp" 
            value="{{ $materia->nombre }}"
            required maxlength="25">
            {!! $errors->first('nombre','<span class=error>:message</span>') !!}
            <div id="leyendaNombre" class="form-text">nombre o tag para identificar la materia</div>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Programa: </label>
            <input type="text" 
            class="form-control" 
            id="programa" name="programa" 
            value="{{ $materia->programa}}"
            required maxlength="10">
            {!! $errors->first('programa','<span class=error>:message</span>') !!}
        </div>
        
        
        <a href="/materias" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop