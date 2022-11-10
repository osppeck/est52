@extends('vistasPersona.formularioEditPersona')

@section('header')
    <h1>EDITAR TRABAJADOR</h1>
    <p>DATOS GENERALES DEL TUTOR</p>
@endsection

@section('actionPOST')
    /trabajadores/{{ $persona->trabajador->id}}
@endsection

@section('inputsFormulario')
    <p>DATOS DE CONTACTO PARA EMERGENCIAS</p>

    <div class="mb-3">
        <label for="" class="form-label">Puesto: </label>
        <input type="text" class="form-control" name="puesto" id="puesto" value="{{ $persona->trabajador->puesto }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Teléfono: </label>
        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $persona->trabajador->telefono}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Correo electrónico: </label>
        <input type="email" class="form-control" id="correo" name="correo" value="{{ $persona->trabajador->correo}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Horas: </label>
        <input type="text" class="form-control" id="horas" name="horas" value="{{ $persona->trabajador->horas}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Status: </label>
        <input type="text" class="form-control" id="status" name="status" value="{{ $persona->trabajador->status}}">
    </div>
    
@endsection

@section('hrefCancelar')
    /trabajadores
@endsection