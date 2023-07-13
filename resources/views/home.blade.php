@extends('layouts.app')
@section('content')

<nav class="navbar navbar-expand-lg bg-danger">
    <a class="navbar-brand fw-bold text-light mx-auto text-center" href="/home">SISTEMA TURÍSTICO</a>
</nav>
    
<!DOCTYPE html>

<html>
    
<head>
    
    <title>Barra de navegación con imagen de fondo</title>
    <style>
        /* Estilos de la barra de navegación */
        ul.navbar {
            list-style-type: none;
            margin: 1;
            padding: 1;
            overflow: hidden;
            background-color: #bf0
        }

        ul.navbar li {
            float: left;
        }

        ul.navbar li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        ul.navbar li a:hover {
            background-color: rgba(0, 0, 0, 0); /* Color de fondo al pasar el cursor */
        }

        /* Estilos de la imagen de fondo */
        body {
            margin: 0;
            padding: 0;
            background-image: url("https://scontent-lim1-1.xx.fbcdn.net/v/t1.6435-9/119593261_3327856427298559_6611206813438204755_n.jpg?_nc_cat=104&cb=99be929b-59f725be&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeGv3FErUvUVfRWgz6SVD_AfjTflRYJxQ9-NN-VFgnFD3_PU2qes0WmF7varfjgchYt7jXhIffvCZ91CJn1xMDS5&_nc_ohc=UV7mrn9nu8oAX_nTn7p&_nc_ht=scontent-lim1-1.xx&oh=00_AfDk-d7Fw2XvqQtUqmGvLeMn6Tz6actIRsy5Pn_6F2nNZA&oe=64D1AAE2");
            background-size: 100% 400%;
            background-position: 80 100px;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <ul class="navbar">
        <li><a href="responsables/mostrar">RESPONSABLES</a></li>
        <li><a href="destinos/mostrar">DESTINOS</a></li>
        <li><a href="usuarios/mostrar">USUARIOS</a></li>
        <li><a href="establecimientos/mostrar">ESTABLECIMIENTOS</a></li>
        

    </ul>
</body>
</html>

<div class="fixed-bottom">
    <div class="container">
        <a href="https://www.facebook.com/municipalidadhco">
            <img src="https://cdn-icons-png.flaticon.com/256/124/124010.png" alt="Imagen 1" width="40" height="40" class="img-thumbnail">
        </a>
        <a href="https://www.munihuanuco.gob.pe/">
            <img src="https://cdn-icons-png.flaticon.com/128/1178/1178997.png" alt="Imagen 2" width="40" height="40" class="img-thumbnail">
        </a>
    </div>
</div>





@endsection

<!-- # esto va despues de title
<nav class="navbar navbar-expand-lg bg-danger">
    <a class="navbar-brand fw-bold text-light" href="#">SISTEMA TURÍSTICO</a>
    
    <a class="nav-link text-light" aria-current="page" href="../responsables/mostrar">RESPONSABLES</a>

    <a class="nav-link text-light" aria-current="page" href="../usuarios/mostrar">USUARIOS</a>

    </nav>
    # hasta </head>
-->    