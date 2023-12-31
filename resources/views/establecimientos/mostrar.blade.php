@extends("layouts.app")
<li><a href="/home">REGRESAR A LA PANTALLA DE INICIO</a></li>


@section("content")
<div class="container">

<h1>ESTABLECIMIENTOS</h1>

<!DOCTYPE html>
<html>
<head>
    <title>REGISTRAR ESTABLECIMIENTOS</title>
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
    <a href="registrar" class="button">REGISTRAR ESTABLECIMIENTOS</a>
</body>
</html>

<table class="table table-bordered table-dark">
    <tr>
        <th>NOMBRE DEL ESTABLECIMIENTO</th>
        <th>DIRECCION DEL ESTABLECIMIENTO</th>
        <th>FECHA ESTABLECIMIENTO</th>
        <th>responsable</th>   
        <th>Acciones</th>
    </tr>
    @foreach($establecimientos as $establecimiento)
    <tr>
        <td>{{$establecimiento->nombreEst}}</td>
        <td>{{$establecimiento->direccionEst}}</td>
        <td>{{$establecimiento->fechaEst}}</td>
        <td>{{$establecimiento->responsable_id}} </td>

        <td>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="/responsables/mostrar">Ver responsables</a>
                </li>
            </ul>
        </td>
        

        



    </tr>
    
    @endforeach
</table>



</div>
@endsection