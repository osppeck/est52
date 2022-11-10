@extends('vistasPersona.formularioIndexPersona')

@section('header')
    <h1>INDEX DOCENTES</h1>
@endsection

@section('hrefCrear')
    {{ route('docentes.create') }}
@endsection

@section('columnasTHead')

    <th scope="col">ID</th>
    <th scope="col">NOMBRE</th>
    <th scope="col">APELLIDO P.</th>
    <th scope="col">APELLIDO M.</th>
    <th scope="col">SEXO</th>
    <th scope="col">NACIMIENTO</th>

    <th scope="col">PUESTO</th>
    <th scope="col">TELEFONO</th>
    <th scope="col">CORREO</th>
    <th scope="col">HORAS</th>
    <th scope="col">STATUS</th>
    <th scope="col">Acciones</th>
@endsection

@section('filasTBody')
    @forelse($trabajadores as $trabajador)
        <tr>
            <td>{{ $trabajador->persona->id }}</td>
            <td>{{ $trabajador->persona->nombre}}</td>
            <td>{{ $trabajador->persona->apellido_p}}</td>
            <td>{{ $trabajador->persona->apellido_m}}</td>
            <td>{{ $trabajador->persona->sexo}}</td>
            <td>{{ $trabajador->persona->fecha_nacimiento}}</td>

            <td>{{ $trabajador->puesto}}</td>
            <td>{{ $trabajador->telefono}}</td>
            <td>{{ $trabajador->correo}}</td>
            <td>{{ $trabajador->horas}}</td>
            <td>{{ $trabajador->status}}</td>

            <td>
                <form action="{{ route('trabajadores.destroy',$trabajador->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    
                    <a href="/trabajadores/{{ $trabajador->id }}/edit" class="btn btn-info">Editar</a>
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @empty
        <p>NO HAY DATOS PARA MOSTRAR</p>
    @endforelse
@endsection