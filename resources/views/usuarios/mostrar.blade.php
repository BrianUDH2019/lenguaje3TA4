@extends("layouts.app")

<!--@section("titulo")
    Mostrar Usuarios
@endsection-->

@section("content")
<div class="container">

<h1>Usuarios</h1>

<table class="table">
    <tr>
        <td>id</td>
        <td>nombres</td>
        <td>apellidos</td>
        <td>pas</td>
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