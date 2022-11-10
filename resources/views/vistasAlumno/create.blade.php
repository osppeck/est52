@extends('vistasPersona.formularioPersona')

@section('header')
    <h1>CREAR NUEVO ALUMNO</h1>
    <p>DATOS GENERALES DEL NUEVO ALUMNO</p>
@endsection

@section('actionPOST')
    /alumnos
@endsection

@section('inputsFormulario')
    <p>DATOS INSTITUCIONALES</p>
    
    <div class="mb-3">
        <label for="" class="form-label">CURP: </label>
        <input type="text" class="form-control" name="curp" id="curp">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Status: </label>
        <input type="text" class="form-control" id="status" name="status">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Feacha de inscripcióno: </label>
        <input type="date" class="form-control" id="fechaInscripcion" name="fechaInscripcion">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Grado: </label>
        <input type="text" class="form-control" id="grado" name="grado">
    </div>

    <p>Datos opcionales</p>

    <div class="mb-3">
        <label for="" class="form-label">Tutor: </label>
        <input type="number" class="form-control" id="tutor_id" name="tutor_id">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Grupo: </label>
        <input type="number" class="form-control" id="grupo_id" name="grupo_id">
    </div>

@endsection

@section('hrefCancelar')
    /alumnos
@endsection