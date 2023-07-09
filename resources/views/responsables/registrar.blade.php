@extends("layouts.app")
<nav class="navbar navbar-dark bg-dark">
<li><a href="/home">REGRESAR A LA PANTALLA DE INICIO</a></li>
<li><a href="mostrar">VER RESPONSABLES</a></li>
</nav>
@section("content")
<div class="container">
<h1> CREAR Responsable <h1>
<form method="post" action="guardar">  
    @csrf
      <input @error('nombres') style="border: 1px solid red" @enderror class="form-control mb-3" type="text" name="nombres" placeholder="Ingrese Nombres" />
      @error('nombres')
    <div class="text-danger mb-3" style="font-size:20px">* {{ $message }}</div>
      @enderror
      <input @error('email') style="border: 1px solid red" @enderror class="form-control mb-3" type="text" name="email" placeholder="Ingrese email" />
      @error('email')
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

