@extends('adminlte::page')

@section('title', 'READ_AULAS')

@section('content_header')
    @yield('header')
@stop

@section('content')
    <p>Bienvenid@ al  Sistema integral de información de la EST 52.</p>
    <a href="@yield('hrefCrear')" class="btn btn-primary">CREAR</a>

    <table id="tablaMaterias" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>

                @yield('columnasTHead')
                
            </tr>
        </thead>
        <tbody>
            @yield('filasTBody')
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
                $('#tablaMaterias').DataTable();
            });
        </script>
@stop