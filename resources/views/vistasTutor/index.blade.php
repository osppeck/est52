@extends('vistasPersona.indexPersona')

@section('header')
    <p> INDEX TUTORES</p>
@endsection

@section('hrefCrear')
    {{ route('tutores.create') }}
@endsection

@section('nameColumnas')
    <th scope="col">TEL1</th>
    <th scope="col">TEL2</th>
    <th scope="col">CORREO P.</th>
    <th scope="col">ESTADO M.</th>
    <th scope="col">MUNICIPIO</th>
    <th scope="col">COLONIA</th>
    <th scope="col">CALLE</th>
    <th scope="col">NÚMERO</th>
    <th scope="col">Acciones</th>
@endsection

@section('valueColumnas')
    @forelse($personas as $persona)
                    <tr>
                        <td>{{ $persona->id }}</td>
                        <td>{{ $persona->nombre}}</td>
                        <td>{{ $persona->apellido_p}}</td>
                        <td>{{ $persona->apellido_m}}</td>
                        <td>{{ $persona->sexo}}</td>
                        <td>{{ $persona->fecha_nacimiento}}</td>
                        <td>AÑOSXD</td>

                        @foreach ($tutores as $tutor)
                            @if ($tutor->persona_id==$persona->id)
                                <td>{{ $tutor->telefono_1 }}</td>
                                <td>{{ $tutor->telefono_2}}</td>
                                <td>{{ $tutor->correo}}</td>
                                <td>{{ $tutor->estado}}</td>
                                <td>{{ $tutor->municipio}}</td>
                                <td>{{ $tutor->colonia}}</td>
                                <td>{{ $tutor->calle}}</td>
                                <td>{{ $tutor->numero}}</td>
                                <td>
                                    <form action="{{ route('tutores.destroy',$tutor->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="/tutores/{{ $tutor->id }}/edit" class="btn btn-info">Editar</a>
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>
                                </td>
                            @endif
                        @endforeach
                        
                    </tr>
                @empty
        <p>NO HAY DATOS PARA MOSTRAR</p>
    @endforelse
@stop