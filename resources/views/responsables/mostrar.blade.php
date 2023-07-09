@extends("layouts.app")
<li><a href="/home">REGRESAR A LA PANTALLA DE INICIO</a></li>
<!--@section("titulo")
    Mostrar Usuarios
@endsection-->

@section("content")
<div class="container">

<h1>RESPONSABLES</h1>

<!DOCTYPE html>
<html>
<head>
    <title>CREAR RESPONSABLES</title>
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
    <a href="registrar" class="button">REGISTRAR RESPONSABLES</a>
</body>
</html>

<table class="table table-bordered table-dark">
    <tr>
        <th scope="col">id</td>
        <th>NOMBRES</th>
        <th>EMAIL</th>
        
    </tr>
    @foreach($responsables as $responsable)
    <tr>
        <td>
             @if($responsable->id ==1234567890)
                55
             @else
                {{$responsable->id}}
             @endif
        </td> 
        <td>{{$responsable->nombres}}</td>
        <td>{{$responsable->email}}</td>
    </tr>
    @endforeach
</table>
</div>
@endsection