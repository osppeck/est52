@extends('vistasPersona.formularioIndexPersona')

@section('header')
    <h1>INDEX CALIFICACIONES</h1>
@endsection

@section('hrefCrear')
    {{ route('calificaciones.create') }}
@endsection

@section('columnasTHead')

    <th scope="col">ID</th>
    <th scope="col">PERIODO</th>
    <th scope="col">EXTRAORDINARIO</th>
    <th scope="col">CALIFICACIÓN</th>
    <th scope="col">FALTAS</th>
    <th scope="col">ALUMNO</th>
    <th scope="col">CLASE</th>

    <th scope="col">Acciones</th>
@endsection

@section('filasTBody')
    @forelse($calificaciones as $calificacion)
        <tr>
            <td>{{ $calificacion->id }}</td>
            <td>{{ $calificacion->periodo}}</td>
            <td>{{ $calificacion->examenR}}</td>
            <td>{{ $calificacion->calificacion}}</td>
            <td>{{ $calificacion->faltas}}</td>
            <td>{{ $calificacion->alumno_id}}</td>
            <td>{{ $calificacion->clase_id}}</td>

            <td>
                <form action="{{ route('calificaciones.destroy',$calificacion->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    
                    <a href="/calificaciones/{{ $calificacion->id }}/edit" class="btn btn-info">Editar</a>
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @empty
        <p>NO HAY DATOS PARA MOSTRAR</p>
    @endforelse
@endsection