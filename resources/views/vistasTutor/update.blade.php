@extends('vistasPersona.formularioEditPersona')

@section('header')
    <h1>EDITAR TUTOR</h1>
    <p>DATOS GENERALES DEL TUTOR</p>
@endsection

@section('actionPOST')
    /tutores/{{ $tutor->id}}
@endsection

@section('inputsFormulario')
    <p>DATOS DE CONTACTO PARA EMERGENCIAS</p>

    <p>{{ $persona }}</p>

    <div class="mb-3">
        <label for="" class="form-label">Teléfono 1: </label>
        <input type="text" class="form-control" name="telefono_1" id="telefono_1" value="{{ $persona->nombre }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Teléfono 2: </label>
        <input type="text" class="form-control" id="telefono_2" name="telefono_2" value="{{ $tutor->telefono_2}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Correo electrónico: </label>
        <input type="email" class="form-control" id="correo" name="correo" value="{{ $tutor->correo}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Estado: </label>
        <input type="text" class="form-control" id="estado" name="estado" value="{{ $tutor->estado}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Municipio: </label>
        <input type="text" class="form-control" id="municipio" name="municipio" value="{{ $tutor->municipio}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Colonia: </label>
        <input type="text" class="form-control" id="colonia" name="colonia" value="{{ $tutor->colonia}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Calle: </label>
        <input type="text" class="form-control" id="calle" name="calle" value="{{ $tutor->calle}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Número: </label>
        <input type="text" class="form-control" id="numero" name="numero" value="{{ $tutor->numero}}">
    </div>
    
@endsection

@section('hrefCancelar')
    /tutores
@endsection