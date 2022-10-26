@extends('adminlte::page')

@section('title', 'CREATE_TUTOR')

@section('content_header')
    @yield('header')
@stop

@section('content')
    <!-- un submit activa automaticamnte el metodo store() en el controlador que invoca, NO SE LLAMA-->
    <form action="@yield('actionPOST')" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="nombre" id="nombre" >
            <div id="leyendaNombre" class="form-text">nombre(s): </div>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Apellido_p: </label>
            <input type="text" class="form-control" id="apellido_p" name="apellido_p">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Apellido_m: </label>
            <input type="text" class="form-control" id="apellido_m" name="apellido_m">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Sexo </label>
            <input type="text" class="form-control" id="sexo" name="sexo">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Fecha de nacimiento: </label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
        </div>
        
        @yield('inputsFormulario')
        
        <!--ambas ban a /personas la diferencia esque guardar hace un submit antes-->
        <a href="@yield('hrefCancelar')" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop