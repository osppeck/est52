@extends('adminlte::page')

@section('title', 'UPDATE_TUTOR')

@section('content_header')
    @yield('header')
@stop

@section('content')
        <!-- un submit activa automaticamnte el metodo UPDATE()en el controlador NO SE LLAMA-->
    <form action="@yield('actionPOST')" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="" class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $persona->nombre }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Apellido paterno: </label>
            <input type="text" class="form-control" id="apellido_p" name="apellido_p" value="{{ $persona->apellido_p }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Apellido materno: </label>
            <input type="text" class="form-control" id="apellido_m" name="apellido_m" value="{{ $persona->apellido_m }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Sexo </label>
            <input type="text" class="form-control" id="sexo" name="sexo" value="{{ $persona->sexo }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Fecha de nacimiento: </label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $persona->fecha_nacimiento }}">
        </div>
        
        @yield('inputsFormulario')
        
        <a href="@yield('hrefCancelar')" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop