@extends('vistasPersona.formularioPersona')

@section('header')
    <h1>CREAR NUEVO TRABAJADOR</h1>
    <p>DATOS GENERALES DEL NUEVO TRABAJDOR</p>
@endsection

@section('actionPOST')
    /trabajadores
@endsection

@section('inputsFormulario')
    <p>DATOS INSTITUCIONALES</p>
    
    <div class="mb-3">
        <label for="" class="form-label">Puesto: </label>
        <input type="text" class="form-control" name="puesto" id="puesto" >
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Teléfono: </label>
        <input type="text" class="form-control" id="telefono" name="telefono">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Correo electrónico: </label>
        <input type="email" class="form-control" id="correo" name="correo">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Horas: </label>
        <input type="text" class="form-control" id="horas" name="horas">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Status: </label>
        <input type="text" class="form-control" id="status" name="status">
    </div>

@endsection

@section('hrefCancelar')
    /trabajadores
@endsection