@extends('vistasPersona.formularioEditPersona')

@section('header')
    <h1>EDITAR ALUMNO</h1>
    <p>DATOS GENERALES DEL ALUMNO</p>
@endsection

@section('actionPOST')
    /alumnos/{{ $persona->alumno->id}}
@endsection

@section('inputsFormulario')
    <p>DATOS DE CONTACTO PARA EMERGENCIAS</p>

    <div class="mb-3">
        <label for="" class="form-label">CURP: </label>
        <input type="text" class="form-control" name="curp" id="curp" value="{{ $persona->alumno->curp }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Status: </label>
        <input type="text" class="form-control" id="status" name="status" value="{{ $persona->alumno->status}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha inscripcion: </label>
        <input type="date" class="form-control" id="fechaInscripcion" name="fechaInscripcion" value="{{ $persona->alumno->fechaInscripcion}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Grado: </label>
        <input type="text" class="form-control" id="grado" name="grado" value="{{ $persona->alumno->grado}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Tutor: </label>
        <input type="text" class="form-control" id="tutor_id" name="tutor_id" value="{{ $persona->alumno->tutor}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Grupo: </label>
        <input type="text" class="form-control" id="grupo_id" name="grupo_id" value="{{ $persona->alumno->grupo}}">
    </div>
    
@endsection

@section('hrefCancelar')
    /alumnos
@endsection