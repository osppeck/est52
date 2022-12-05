@extends('adminlte::page')

@section('title', 'SECRETARIAS')

@section('content_header')
    <h1>PANEL PRINCIPAL SECRETARIAS</h1>
@stop

@section('content')
    
    <p>Bienvenid@ al  Sistema integral de información de la EST 52.</p>
    <p>A continuación dispone de las opciones principales de  este usuario:</p>


    <div class="container">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CREDENCIALIZACIÓN</h5>
                    <p class="card-text">Generar, cosultar, descargar credenciales de un alumno o alumnos específico(s)</p>
                    <a href="/credencializacion" class="btn btn-primary stretched-link">Ir a Credencialización</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">BOLETA DE CALIFICACIONES</h5>
                    <p class="card-text">Expediente de calificaciones del alumnado en general : {{ date("Y")."-".date("Y")+1 }} y anteriores ciclos</p>
                    <a href="/boletas" class="btn btn-primary stretched-link">Consultar boletas</a>
                </div>
            </div>
        
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">INSCRIPCIONES</h5>
                    <p class="card-text">Inscripción directa de Alumnos durante el período regular {{ date("Y")."-".date("Y")+1 }}</p>
                    <a href="{{ route('inscripciones.create') }}" class="btn btn-primary stretched-link">Inscribir Alumno</a>
                </div>
            </div>

        </div>
    </div>



    <p>Relación de alumnos inscritos:</p>
    
    <table id="tablaInscripciones" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO P.</th>
                <th scope="col">APELLIDO M.</th>
                <th scope="col">SEXO</th>
                <th scope="col">EDAD</th>
                <th scope="col">TUTOR.</th>
                <th scope="col">TEL. PRINCIPAL</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->persona->id }}</td>
                    <td>{{ $alumno->persona->nombre}}</td>
                    <td>{{ $alumno->persona->apellido_p}}</td>
                    <td>{{ $alumno->persona->apellido_m}}</td>
                    <td>{{ $alumno->persona->sexo}}</td>
                    <td>{{ date_diff(date_create($alumno->persona->fecha_nacimiento), date_create(now()))->format('%y a ,%m m , %d d ')}}</td>
                    <td>{{ $alumno->tutor->persona->nombre." ".$alumno->tutor->persona->apellido_p}}</td>
                    <td>{{ $alumno->tutor->telefono_1}}</td>
                    <td>
                            <!-- llamada a un método del objeto materia en cuestión, ni idea de poqeu es materias y no materia -->
                        <form action="{{ route('alumnos.destroy',$alumno->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                    
                </tr>
            @empty
                <p>NO HAY DATOS PARA MOSTRAR</p>
            @endforelse
        </tbody>
    </table>  
    <!-- 6.- añadimos el apartado en el panel en aap/config/adminLTE ya podemos corer la vista (controller)-->


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#tablaInscripciones').DataTable();
        });
    </script>
@stop