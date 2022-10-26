@extends('adminlte::page')

@section('title', 'READ_TUTORES')

@section('content_header')
    <h1>VISTA INDEX TUTORES</h1>
@stop

@section('content')
    <!-- 5.- CREAMOS LA VISTA , YA TENEMOS LOS DATOS HEREDAMOS DE adminlte-->

    <p>Bienvenid@ al  Sistema integral de información de la EST 52.</p>
    
    <!-- este enlace llama a un METODO¡¡¡¡ de controlador dentro de la carpeta ...http/controllers/ -->
    <!-- debe llamarse igual...  METODO()¡¡¡¡ASDASDSADASDasdSaDsaDASd-->
    <a href="/tutores/create" class="btn btn-primary">CREAR</a>
<!--<a href="{. route('materias.create') }}"  es otra manera iguial-->

    <table id="tablaMaterias" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TEL #1</th>
                <th scope="col">TEL #2</th>
                <th scope="col">CORREO</th>
                <th scope="col">ESTADO</th>
                <th scope="col">MUNICIPIO</th>
                <th scope="col">COLONIA</th>
                <th scope="col">CALLE</th>
                <th scope="col">NÚMERO</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tutores as $tutores)
                <tr>
                    <td>{{ $id->id }}</td>
                    <td>{{ $telefono_1->telefono_1}}</td>
                    <td>{{ $telefono_2->telefono_2}}</td>
                    <td>{{ $correo->correo}}</td>
                    <td>{{ $estado->estado }}</td>
                    <td>{{ $municipio->municipio}}</td>
                    <td>{{ $colonia->colonia }}</td>
                    <td>{{ $calle->calle }}</td>
                    <td>{{ $numero->numero}}</td>
                    <td>
                            <!-- llamada a un método del objeto materia en cuestión, ni idea de poqeu es materias y no materia -->
                        <form action="{{ route('tutores.destroy',$tutor->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <!-- igual llama a un método edit($id) los parametros van antes-->
                            <!-- es la primera< vez durante el roceso que se eneran rutas dinamicas(rutas de metodos)-->
                            <a href="/tutores/{{ $tutor->id }}/edit" class="btn btn-info">Editar</a>
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                    
                </tr>
            @empty
                <p>NO HAY DATOS PARA MOSTRAR</p>
            @endforelse
        </tbody>
    </table>  
    <!-- 6.- añadimos el apartado en el panel en aap/config/adminLTE ya podemos corer la vista-->


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