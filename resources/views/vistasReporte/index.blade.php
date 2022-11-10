@extends('vistasPersona.formularioIndexPersona')

@section('header')
    <h1>INDEX REPORTES</h1>
@endsection

@section('hrefCrear')
    {{ route('reportes.create') }}
@endsection

@section('columnasTHead')

    <th scope="col">ID</th>
    <th scope="col">PUNTAJE</th>
    <th scope="col">ASUNTO</th>
    <th scope="col">OBSERVACIONES</th>
    <th scope="col">FECHA</th>
    <th scope="col">ALUMNO</th>
    <th scope="col">TRABAJADOR</th>

    
    <th scope="col">Acciones</th>
@endsection

@section('filasTBody')
    @forelse($reportes as $reporte)
        <tr>
            <td>{{ $reporte->id }}</td>
            <td>{{ $reporte->puntaje}}</td>
            <td>{{ $reporte->asunto}}</td>
            <td>{{ $reporte->observaciones}}</td>
            <td>{{ $reporte->fecha}}</td>
            <td>{{ $reporte->alumno_id}}</td>
            <td>{{ $reporte->trabajador_id}}</td>

            <td>
                <form action="{{ route('reportes.destroy',$reporte->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    
                    <a href="/reportes/{{ $reporte->id }}/edit" class="btn btn-info">Editar</a>
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @empty
        <p>NO HAY DATOS PARA MOSTRAR</p>
    @endforelse
@endsection