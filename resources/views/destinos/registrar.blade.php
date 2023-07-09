@extends("layouts.app")
<nav class="navbar navbar-dark bg-dark">
<li><a href="/home">REGRESAR A LA PANTALLA DE INICIO</a></li>
<li><a href="mostrar">VER DESTINOS</a></li>
</nav>
@section("content")
<div class="container">
<h1> CREAR DESTINOS <h1>
<form method="post" action="guardar">  
    @csrf
      <input @error('lugar') style="border: 1px solid red" @enderror class="form-control mb-3" type="text" name="lugar" placeholder="Ingrese Nombre del Lugar" />
      @error('lugar')
    <div class="text-danger mb-3" style="font-size:20px">* {{ $message }}</div>
      @enderror
      <input @error('departamento') style="border: 1px solid red" @enderror class="form-control mb-3" type="text" name="departamento" placeholder="Ingrese DEPARTAMENTO" />
      @error('departamento')
    <div class="text-danger mb-3" style="font-size:20px">* {{ $message }}</div>
      @enderror
    <input @error('provincia') style="border: 1px solid red" @enderror class="form-control mb-3" type="text" name="provincia" placeholder="Ingrese PROVINCIA" />
      @error('provincia')
    <div class="text-danger mb-3" style="font-size:20px">* {{ $message }}</div>
      @enderror
    <input @error('distrito') style="border: 1px solid red" @enderror class="form-control mb-3" type="text" name="distrito" placeholder="Ingrese DISTRITO" />
      @error('distrito')
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

