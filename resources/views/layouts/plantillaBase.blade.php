<!doctype html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- integrar css DE  DattaTable-->
        @yield('css')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
        <title>CRUD</title></title>
    </head>
    <body>
        <h1 class="bg-primary text-white text-center" >Todos los grupos</h1>
        <!-- ontenido, AQUI VA LA TABLA DE DATOS-->
        <div class="container">
            @yield('contenido')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        <!-- integrar JS de DattaTable-->
        @yield('js')
    </body>
</html>