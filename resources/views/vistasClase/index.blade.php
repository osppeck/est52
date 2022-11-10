@extends('vistasPersona.formularioIndexPersona')

@section('header')
    <h1>INDEX CLASES</h1>
@endsection

@section('hrefCrear')
    {{ route('clases.create') }}
@endsection

@section('columnasTHead')

    <th scope="col">ID</th>
    <th scope="col">HORA INICIO</th>
    <th scope="col">HORA DE FINALIZACIÓN</th>
    <th scope="col">DÍAS</th>
    <th scope="col">DOCENTE</th>
    <th scope="col">MATERIA</th>
    <th scope="col">GRUPO</th>
    <th scope="col">AULA</th>

    
    <th scope="col">Acciones</th>
@endsection

@section('filasTBody')
    @forelse($clases as $clase)
        <tr>
            <td>{{ $clase->id }}</td>
            <td>{{ $clase->horaE}}</td>
            <td>{{ $clase->horaS}}</td>
            <td>{{ $clase->dias}}</td>
            <td>{{ $clase->docente_id}}</td>
            <td>{{ $clase->materia_id}}</td>
            <td>{{ $clase->grupo_id}}</td>
            <td>{{ $clase->aula_id}}</td>

            <td>
                <form action="{{ route('clases.destroy',$clase->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    
                    <a href="/clases/{{ $clase->id }}/edit" class="btn btn-info">Editar</a>
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @empty
        <p>NO HAY DATOS PARA MOSTRAR</p>
    @endforelse
@endsection