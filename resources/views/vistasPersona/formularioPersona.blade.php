@extends('adminlte::page')

@section('title', 'CREATE_PERSONA')

@section('content_header')
    @yield('header')
@stop

@section('content')
    <!-- un submit activa automaticamnte  el metodo store() en el controlador que invoca, NO SE LLAMA-->
    <form action="@yield('actionPOST')" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" >
            @error('nombre')
                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Apellido_p: </label>
            <input type="text" class="form-control" id="apellido_p" name="apellido_p" value="{{ old('apellido_p') }}">
            @error('apellido_p')
                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Apellido_m: </label>
            <input type="text" class="form-control" id="apellido_m" name="apellido_m" value="{{ old('apellido_m') }}">
            @error('apellido_m')
                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <label class="form-label">Sexo: </label>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="masculino" name="sexo" value="M" {{ old('sexo')=='M' ? 'checked' : '' }} >
            <label class="form-check-label" for="masculino">Masculino</label>
        </div>
        <div class="form-check mb-3">
            <input type="radio" class="form-check-input" id="femenino" name="sexo" value="F" {{ old('sexo')== 'F' ? 'checked' : '' }} >
            <label class="form-check-label" for="femenino">Femenino</label>
            <div class="invalid-feedback">Debe seleccionar el sexo</div>
            <br>
            @error('sexo')
                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Fecha de nacimiento: </label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" >
            @error('fecha_nacimiento')
                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>
        
        @yield('inputsFormulario')
        
        <!--ambas ban a /personas la diferencia esque guardar hace un submit antes-->
        <a href="@yield('hrefCancelar')" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @yield('css')
@stop

@section('js')
    @yield('js')
@stop