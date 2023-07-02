@extends("layouts.app")

<!--@section("titulo")
    Mostrar Usuarios
@endsection-->

@section("content")
<div class="container">

<h1>RESPONSABLES</h1>

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