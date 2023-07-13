@extends("layouts.app")


<nav class="navbar navbar-light" style="background-color: #9BEAD9;">
<li><a href="/home">REGRESAR A LA PANTALLA DE INICIO</a></li>

</nav>
<!--@section("titulo")
    Mostrar Usuarios
@endsection-->

@section("content")
<div class="container">

<h1>USUARIOS REGISTRADOS</h1>

<!DOCTYPE html>
<html>
<head>
    <title>CREAR USUARIOS</title>
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
    <a href="registrar" class="button">REGISTRAR USUARIOS</a>
</body>
</html>

<table class="table table-bordered table-dark">
    <tr>
        <th scope="col">id</td>
        <th>NOMBRES</th>
        <th>APELLIDOS</th>
        <th>PAIS</th>

        
    </tr>
    @foreach($usuarios as $usuario)
    <tr>
        <td>
             @if($usuario->id ==1234567890)
                55
             @else
                {{$usuario->id}}
             @endif
        </td> 
        <td>{{$usuario->nombres}}</td>
        <td>{{$usuario->apellidos}}</td>
        <td>{{$usuario->pais}}</td>

    </tr>
    @endforeach
</table>
</div>

@endsection