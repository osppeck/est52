@extends('adminlte::page')

@section('title', 'READ_GRUPOS')

@section('content_header')
    <h1>VISTA INDEX GRUPOS</h1>
@stop

@section('content')
    <p>Bienvenid@ al  Sistema integral de información de la EST 52.</p>
    
    <a href="grupos/create" class="btn btn-primary">CREAR</a>
    
    <table id="grupos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CICLO</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($grupos as $grupo)
                <tr>
                    <td>{{ $grupo->id }}</td>
                    <td>{{ $grupo->nombre }}</td>
                    <td>{{ $grupo->ciclo }}</td>
                    <td>
                        <form action="{{ route('grupos.destroy',$grupo->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/grupos/{{ $grupo->id }}/edit" class="btn btn-info">Editar</a>
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                    
                </tr>
            @empty
                <p>NO HAY DATOS PARA MOSTRAR</p>
            @endforelse
        </tbody>
    </table>


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
                $('#grupos').DataTable();
            });
        </script>
@stop