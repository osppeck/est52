@extends('adminlte::page')

@section('title', 'READ_PERSONAS')

@section('content_header')
    <h1>VISTA INDEX PERSONAS ESTRAOFICIAL</h1>
@stop

@section('content')
    

    <p>Bienvenid@ al  Sistema integral de información de la EST 52.</p>

    <a href="{{ route('personas.create') }}" class="btn btn-primary">CREAR</a>
    <table id="tablaMaterias" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO P.</th>
                <th scope="col">APELLIDO M.</th>
                <th scope="col">SEXO</th>
                <th scope="col">NACIMIENTO</th>
                <th scope="col">AÑOS.</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($personas as $persona)
                <tr>
                    <td>{{ $persona->id }}</td>
                    <td>{{ $persona->nombre}}</td>
                    <td>{{ $persona->apellido_p}}</td>
                    <td>{{ $persona->apellido_m}}</td>
                    <td>{{ $persona->sexo}}</td>
                    <td>{{ $persona->fecha_nacimiento}}</td>
                    <td>añosXD</td>
                    <td>
                            <!-- llamada a un método del objeto materia en cuestión, ni idea de poqeu es materias y no materia -->
                        <form action="{{ route('personas.destroy',$persona->id) }}" method="POST">
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

@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

        <script>
            $(document).ready(function () {
                $('#tablaMaterias').DataTable();
            });
        </script>
@stop