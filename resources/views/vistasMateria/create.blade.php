@extends('adminlte::page')

@section('title', 'CREATE_GRUPOS')

@section('content_header')
    <h1>CREAR NUEVA MATERIA</h1>
@stop

@section('content')
    <!-- un submit activa automaticamnte el metodo store() en el controlador que invoca, NO SE LLAMA-->
    <form action="/materias" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="nombre" id="nombre" >
            <div id="leyendaNombre" class="form-text">nombre o tag para identificar la materia</div>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Programa: </label>
            <input type="text" class="form-control" id="programa" name="programa">
        </div>
        
        
        <!--ambas ban a /materias la diferencia esque guardar hace un submit antes-->
        <a href="/materias" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop