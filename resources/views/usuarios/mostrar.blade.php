@extends("layouts.app")

<!--@section("titulo")
    Mostrar Usuarios
@endsection-->

@section("content")
<div class="container">

<h1>USUARIOS REGISTRADOS</h1>

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
             @if($usuario->id ==2)
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