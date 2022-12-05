@extends('vistasAlumno.plantillaCreate')

@section('header')
    <h1>CREAR NUEVO ALUMNO</h1>
    <p>DATOS GENERALES DEL NUEVO ALUMNO</p>
@endsection

@section('actionPOST')
    /alumnos
@endsection

@section('datosAdicionales')
    <p>Datos opcionales</p>
    
    <div class="mb-3">
        <label for="" class="form-label">Tutor: </label>
        <div id="nombre" class="form-text">(Opcional) Seleccione un tutor de la lista, use el apartado de búsqueda para agilizar la tarea</div>
    </div>

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


    <div class="mb-3">
        <label for="" class="form-label">Grupo: </label>
        <div id="nombre" class="form-text">(Opcional) Seleccione un grup de la lista, use el apartado de búsqueda para agilizar la tarea</div>
    </div>
    <table id="tablaGrupos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">GRUPO</th>
                <th scope="col">CICLO ESCOLAR</th>
                <th scope="col">Seleccionar</th>
            </tr>
        </thead>
        <tbody>
            @forelse($grupos as $grupo)
                <tr>
                    <td>{{ $grupo->nombre}}</td>
                    <td>{{ $grupo->ciclo}}</td>

                    <td>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="{{ $grupo->id }}°" name="grupo_id" value="{{ $grupo->id }}" 
                                {{ old('grupo_id') == $grupo->id ? 'checked' : '' }} >
                            <label class="form-check-label" for="{{ $grupo->id }}°"> </label>
                        </div>
                    </td>
                </tr>
                @empty
                <p>NO HAY DATOS PARA MOSTRAR</p>
            @endforelse
        </tbody>
    </table>  
    @error('grupo_id')
        <small>*{{ $message }}</small>
        <br>
    @enderror
    <br>

@endsection

@section('hrefCancelar')
    /alumnos
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#tablaTutores').DataTable();
            $('#tablaGrupos').DataTable();
        });
    </script>
@endsection
