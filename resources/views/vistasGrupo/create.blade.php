@extends('adminlte::page')

@section('title', 'CREATE_GRUPOS')

@section('content_header')
    <h1>CREAR NUEVO GRUPO</h1>
@stop

@section('content')
    <form action="/grupos" method="POST">
        @csrf

        <div class="btn-group" role="group" aria-label="grado">
            <label for="" class="form-label">Grado: </label>
            <input type="radio" class="btn-check" name="grados" id="grados1" 
            value="1" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="grados1">1° Primer grado</label>
        
            <input type="radio" class="btn-check" name="grados" id="grados2" 
            value="2" autocomplete="off">
            <label class="btn btn-outline-primary" for="grados2">2° Segundo grado</label>
        
            <input type="radio" class="btn-check" name="grados" id="grados3" 
            value="3" autocomplete="off" value="3">
            <label class="btn btn-outline-primary" for="grados3">3° Tercer grado</label>
            
        </div>

        <br>

        <div class="btn-group" role="group" aria-label="grupo">
            <label for="" class="form-label">Grupo: </label>
            <input type="radio" class="btn-check" name="grupos" id="grupoa" autocomplete="off" 
            value="A"
            checked>
            <label class="btn btn-outline-primary" for="grupoa">A</label>
        
            <input type="radio" class="btn-check" name="grupos" id="grupob" 
            value="B"
            autocomplete="off" value="{{ old('grupos') }}">
            <label class="btn btn-outline-primary" for="grupob">B</label>
        
            <input type="radio" class="btn-check" name="grupos" id="grupoc" 
            value="C"
            autocomplete="off" value="{{ old('grupos') }}">
            <label class="btn btn-outline-primary" for="grupoc">C</label>

            <input type="radio" class="btn-check" name="grupos" id="grupox" autocomplete="off" value="X" onclick="chechOtro()">
            <label class="btn btn-outline-primary"  for="grupox" >Otro</label>

            <input type="text" class="form-control" id="otro" name="otro" placeholder="D,E,F..." 
            maxlength="1" data-show-if="grupox">
            {!! $errors->first('otro','<span class=error>:message</span>') !!}


            {!! $errors->first('grupos','<span class=error>:message</span>') !!}

        </div>

        <div class="input-group">
            <label for="" class="form-label">Ciclo escolar: </label>
            <input type="number" min="1900" max="2099" step="1" value="2021" class="form-control" name="ciclo1" id="ciclo1" required
            value="{{ old('ciclo1') }}">
            {!! $errors->first('ciclo1','<span class=error>:message</span>') !!}

            <label for=""> - </label>
            <input type="number" min="1900" max="2099" step="1" value="2022" class="form-control" name="ciclo2" id="ciclo2" required
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
<script>
    function checkOtro(){
        alert("Selected Radio Button is: "); 
    }
</script>
@stop
