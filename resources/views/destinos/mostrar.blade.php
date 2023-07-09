@extends("layouts.app")
<li><a href="/home">REGRESAR A LA PANTALLA DE INICIO</a></li>
<!--@section("titulo")
    Mostrar Usuarios
@endsection-->

@section("content")
<div class="container">

<h1>DESTINOS</h1>

<!DOCTYPE html>
<html>
<head>
    <title>CREAR DESTINOS</title>
    <style>
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <a href="registrar" class="button">REGISTRAR DESTINOS</a>
</body>
</html>

<table class="table table-bordered table-dark">
    <tr>
        <th>LUGAR</th>
        <th>DEPARTAMENTO</th>
        <th>PROVINCIA</th>
        <th>DISTRITO</th>

        
    </tr>
    @foreach($destinos as $destino)
    <tr>
        <td>{{$destino->lugar}}</td>
        <td>{{$destino->departamento}}</td>
        <td>{{$destino->provincia}}</td>
        <td>{{$destino->distrito}}</td>

    </tr>
    @endforeach
</table>
</div>
@endsection