@extends('vistasPersona.formularioPersona')

@section('header')
    <h1>CREAR NUEVO TUTOR</h1>
    <p>DATOS GENERALES DEL TUTOR</p>
@endsection

@section('actionPOST')
    /tutores
@endsection

@section('inputsFormulario')
    <p>DATOS DE CONTACTO PARA EMERGENCIAS</p>
    
    <div class="mb-3">
        <label for="" class="form-label">Teléfono 1: </label>
        <input type="text" class="form-control" name="telefono_1" id="telefono_1"  value="{{ old('telefono_1') }}">
        @error('telefono_1')
            <small>*{{ $message }}</small>
            <br>
        @enderror
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Teléfono 2: </label>
        <input type="text" class="form-control" id="telefono_2" name="telefono_2" value="{{ old('telefono_2') }}" >
        @error('telefono_2')
            <small>*{{ $message }}</small>
            <br>
        @enderror
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Correo electrónico: </label>
        <input type="email" class="form-control" id="correo" name="correo" value="{{ old('correo') }}">
        @error('correo')
            <small>*{{ $message }}</small>
            <br>
        @enderror
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Estado: </label>
        <input type="text" class="form-control" id="estado" name="estado" value="Oaxaca" value="{{ old('estado') }}" >
        @error('estado')
            <small>*{{ $message }}</small>
            <br>
        @enderror
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Municipio: </label>
        <input type="text" class="form-control" id="municipio" name="municipio" value="Puerto Ángel" value="{{ old('municipio') }}">
        @error('municipio')
            <small>*{{ $message }}</small>
            <br>
        @enderror
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Colonia: </label>
        <input type="text" class="form-control" id="colonia" name="colonia" value="{{ old('colonia') }}">
        @error('colonia')
            <small>*{{ $message }}</small>
            <br>
        @enderror
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Calle: </label>
        <input type="text" class="form-control" id="calle" name="calle" value="{{ old('calle') }}" >
        @error('calle')
            <small>*{{ $message }}</small>
            <br>
        @enderror
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Número: </label>
        <input type="text" class="form-control" id="numero" name="numero" value="{{ old('numero') }}">
        @error('numero')
            <small>*{{ $message }}</small>
            <br>
        @enderror
    </div>

@endsection

@section('hrefCancelar')
    /tutores
@endsection