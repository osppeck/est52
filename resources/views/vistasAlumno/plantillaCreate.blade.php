@extends('vistasPersona.formularioPersona')

@section('header')
    @yield('header')
@endsection

@section('actionPOST')
    @yield('actionPOST')
@endsection

@section('inputsFormulario')
    <p>DATOS INSTITUCIONALES</p>
    
    <div class="mb-3">
        <label for="" class="form-label">CURP: </label>
        <input type="text" class="form-control" name="curp" id="curp" value="{{ old('curp') }}">
        @error('curp')
            <small>*{{ $message }}</small>
            <br>
        @enderror
    </div>


    <label class="form-label">Status: </label>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="activo" name="status" value="activo" {{ old('status') == 'activo' ? 'checked' : '' }}>
        <label class="form-check-label" for="activo">Activo</label>
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="suspension" name="status" value="suspension" {{ old('status') == 'suspension' ? 'checked' : '' }}>
        <label class="form-check-label" for="suspension">Suspensión</label>
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="bajatemp" name="status" value="baja temporal" {{ old('status') == 'baja temporal' ? 'checked' : '' }}>
        <label class="form-check-label" for="bajatemp">Baja temporal</label>
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="bajadef" name="status" value="baja definitiva" {{ old('status') == 'baja definitiva' ? 'checked' : '' }}>
        <label class="form-check-label" for="bajadef">Baja definitiva</label>
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="egresado" name="status" value="egresado" {{ old('status') == 'egresado' ? 'checked' : '' }}>
        <label class="form-check-label" for="egresado">Egresado</label>
    </div>
    <div class="form-check mb-3">
        <input type="radio" class="form-check-input" id="indeterminado" name="status" value="indeterminado" {{ old('status') == 'indeterminado' ? 'checked' : '' }}>
        <label class="form-check-label" for="indeterminado">Indeterminado</label>
        <div class="invalid-feedback">Debe seleccionar el Status</div>
    </div>
    @error('status')
        <small>*{{ $message }}</small>
        <br>
    @enderror
    <br>

    <div class="mb-3">
        <label for="" class="form-label">Feacha de inscripción: </label>
        <input type="date" class="form-control" id="fechaInscripcion" name="fechaInscripcion" value="{{ old('fechaInscripcion',now()->toDateString()) }}">
        @error('fechaInscripcion')
            <small>*{{ $message }}</small>
            <br>
        @enderror
    </div>


    <label class="form-label">Grado: </label>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="primero" name="grado" value="1" {{ old('grado') == '1' ? 'checked' : '' }}>
        <label class="form-check-label" for="primero">1° Primero</label>
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="segundo" name="grado" value="2" {{ old('grado') == '2' ? 'checked' : '' }}>
        <label class="form-check-label" for="segundo">2° Segundo</label>
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="tercero" name="grado" value="3" {{ old('grado') == '3' ? 'checked' : '' }}>
        <label class="form-check-label" for="tercero">3° Tercero</label>
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="cuarto" name="grado" value="4" {{ old('grado') == '4' ? 'checked' : '' }}>
        <label class="form-check-label" for="cuarto">4° Cuarto</label>
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="quinto" name="grado" value="5" {{ old('grado') == '5' ? 'checked' : '' }}>
        <label class="form-check-label" for="quinto">5° Quinto</label>
    </div>
    <div class="form-check mb-3">
        <input type="radio" class="form-check-input" id="sexto" name="grado" value="6" {{ old('grado') == '6' ? 'checked' : '' }}>
        <label class="form-check-label" for="sexto">6° Sexto</label>
        <div class="invalid-feedback">Debe seleccionar el grado</div>
    </div>
    @error('grado')
        <small>*{{ $message }}</small>
        <br>
    @enderror
    <br>

    @yield('datosAdicionales')

@endsection

@section('hrefCancelar')
    @yield('hrefCancelar')
@endsection

@section('css')
    @yield('css')
@endsection

@section('js')
    @yield('js')
@endsection