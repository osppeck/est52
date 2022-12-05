@extends('vistasAlumno.plantillaCreate')

@section('header')
    <h1>PERÍODO  ORDINARIO DE INSCRIPCIÓN</h1>
    <p>formato de inscripción del alumno</p>
@endsection

@section('actionPOST')
    /inscripciones
@endsection

@section('datosAdicionales')
    <p style="text-align:center">DATOS DEL TUTOR</p>

    <label class="form-label">¿TUTOR EXISTENTE?: </label>

        
    <div class="form-check">
        <input type="radio" class="form-check-input" id="nuevoTutor" name="existeTutor" value="no" {{ old('existeTutor')=='si' ? '' : 'checked' }} onclick="ocultarTutores()">
        <label class="form-check-label" for="nuevoTutor" >Nuevo tutor</label>
    </div>
    <div class="form-check mb-3">
        <input type="radio" class="form-check-input" id="selectTutor" name="existeTutor" value="si" {{ old('existeTutor')== 'si' ? 'checked' : '' }} onclick="mostrarTutores()">
        <label class="form-check-label" for="selectTutor">Seleccionar tutor</label>
        <br>
        @error('existeTutor')
            <small>*{{ $message }}</small>
            <br>
        @enderror
    </div>

    <section id="caja" class="cajas">
        <p>Utilice la herramienta de búsqueda para agilizar la tarea</p>
        <table id="tablaTutores" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO P.</th>
                    <th scope="col">APELLIDO M.</th>
                    <th scope="col">TEL 1</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">COL.</th>
                    <th scope="col">Seleccionar</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tutores as $tutor)
                    <tr>
                        <td>{{ $tutor->persona->nombre}}</td>
                        <td>{{ $tutor->persona->apellido_p}}</td>
                        <td>{{ $tutor->persona->apellido_m}}</td>
                        <td>{{ $tutor->telefono_1}}</td>
                        <td>{{ $tutor->correo}}</td>
                        <td>{{ $tutor->colonia}}</td>

                        <td>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="{{ $tutor->id }}°" name="tutor_id" value="{{ $tutor->id }}" 
                                    {{ old('tutor_id') == $tutor->id ? 'checked' : '' }} >
                                <label class="form-check-label" for="{{ $tutor->id }}°"> </label>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <p>NO HAY DATOS PARA MOSTRAR</p>
                @endforelse
            </tbody>
        </table>  
        @error('tutor_id')
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
    </section>

    <section id="caja2" class="cajas">
        <p>NUEVO TUTOR</p>

        <div class="mb-3">
            <label for="" class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="nombreTutor" id="nombreTutor" value="{{ old('nombreTutor') }}" >
            @error('nombreTutor')
                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Apellido_p: </label>
            <input type="text" class="form-control" id="apellido_p" name="apellido_pTutor" value="{{ old('apellido_pTutor') }}">
            @error('apellido_pTutor')
                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Apellido_m: </label>
            <input type="text" class="form-control" id="apellido_m" name="apellido_mTutor" value="{{ old('apellido_mTutor') }}">
            @error('apellido_m')
                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <label class="form-label">Sexo: </label>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="masculinoTutor" name="sexoTutor" value="M" {{ old('sexoTutor')=='M' ? 'checked' : '' }} >
            <label class="form-check-label" for="masculinoTutor">Masculino</label>
        </div>
        <div class="form-check mb-3">
            <input type="radio" class="form-check-input" id="femeninoTutor" name="sexoTutor" value="F" {{ old('sexoTutor')== 'F' ? 'checked' : '' }} >
            <label class="form-check-label" for="femeninoTutor">Femenino</label>
            <div class="invalid-feedback">Debe seleccionar el sexo</div>
            <br>
            @error('sexo')
                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Fecha de nacimiento: </label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimientoTutor" value="{{ old('fecha_nacimientoTutor') }}" >
            @error('fecha_nacimiento')
                <small>*{{ $message }}</small>
                <br>
            @enderror
        </div>

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
    </section>
@endsection

@section('hrefCancelar')
    /inscripciones
@endsection

@section('css') 
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <style>
        #caja{
            display:none;
        }

        .cajas{
            background: rgb(234, 238, 255);
        }
    </style>
@endsection

@section('js')
    <script>
        function ocultarTutores() {
            document.getElementById("caja").style.display = "none";
            document.getElementById("caja2").style.display = "block";
        }
        function mostrarTutores() {
            document.getElementById("caja").style.display = "block";
            document.getElementById("caja2").style.display = "none";
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#tablaTutores').DataTable();
        });
    </script>

@endsection

