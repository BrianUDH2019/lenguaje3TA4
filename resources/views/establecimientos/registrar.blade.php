@extends("layouts.app")
<nav class="navbar navbar-dark bg-dark">
<li><a href="/home">REGRESAR A LA PANTALLA DE INICIO</a></li>
<li><a href="mostrar">VER ESTABLECIMIENTOS</a></li>
</nav>
@section("content")
<div class="container">
<h1> REGISTRO DE USUARIOS <h1>
<form method="post" action="guardar">  
    @csrf
      <input @error('nombreEst') style="border: 1px solid red" @enderror class="form-control mb-3" type="text" name="nombreEst" placeholder="Ingrese Nombre de establecimeitno" />
      @error('nombreEst')
    <div class="text-danger mb-3" style="font-size:20px">* {{ $message }}</div>
      @enderror
      <input @error('direccionEst') style="border: 1px solid red" @enderror class="form-control mb-3" type="text" name="direccionEst" placeholder="Ingrese direccion del establecimiento" />
      @error('direccionEst')
    <div class="text-danger mb-3" style="font-size:20px">* {{ $message }}</div>
      @enderror
      <input @error('fechaEst') style="border: 1px solid red" @enderror class="form-control mb-3" type="datetime-local" name="fechaEst" placeholder="Ingrese fecha" />
      @error('fechaEst')
    <div class="text-danger mb-3" style="font-size:20px">* {{ $message }}</div>
      @enderror
      
      <input class="btn btn-primary" type="submit" value="guardar"/>
</form>
<br>
<!--
@if ($errors->any())    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
</div>
@endsection

