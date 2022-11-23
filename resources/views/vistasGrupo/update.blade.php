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
            <label for="" class="form-label">Grado: </label>
            <input type="number" maxlength="1" min="1" max="3" step="1" value="{{ $grupo->nombre[0] }}"
            class="form-control" 
            name="nombre" 
            id="nombre" 
            aria-describedby="emailHelp" 
            value="{{ $grupo->nombre }}"
            required maxlength="1">
            {!! $errors->first('nombre','<span class=error>:message</span>') !!}
            <div id="leyendaNombre" class="form-text">nombre o tag para identificar la grupo</div>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Grupo: </label>
            <input type="text" maxlength="1" value="{{ $grupo->nombre[1] }}"
            class="form-control" 
            id="grupo" name="grupo" 
            value="{{ $grupo->grupo}}"
            required maxlength="1">
            {!! $errors->first('grupo','<span class=error>:message</span>') !!}
        </div>

        <div class="input-group">
            <label for="" class="form-label">Ciclo escolar: </label>
            <input type="number" min="1900" max="2099" step="1" value="{{ strtok($grupo->ciclo, "-") }}" class="form-control" name="ciclo1" id="ciclo1" required
            value="{{ old('ciclo1') }}">
            {!! $errors->first('ciclo1','<span class=error>:message</span>') !!}

            <label for=""> - </label>
            <input type="number" min="1900" max="2099" step="1" value="{{ strtok("-") }}" class="form-control" name="ciclo2" id="ciclo2" required
            value="{{ old('ciclo2') }}">

            {!! $errors->first('ciclo2','<span class=error>:message</span>') !!}


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