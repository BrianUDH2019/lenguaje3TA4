@extends("layouts.app")

@section("content")
<div class="container">
<h1> REGISTRO DE USUARIOS <h1>
<form method="post" action="guardar">  
    @csrf
      <input @error('nombres') style="border: 1px solid red" @enderror class="form-control mb-3" type="text" name="nombres" placeholder="Ingrese Nombres" />
      @error('nombres')
    <div class="text-danger mb-3" style="font-size:20px">* {{ $message }}</div>
      @enderror
      <input @error('apellidos') style="border: 1px solid red" @enderror class="form-control mb-3" type="text" name="apellidos" placeholder="Ingrese Apellidos" />
      @error('apellidos')
    <div class="text-danger mb-3" style="font-size:20px">* {{ $message }}</div>
      @enderror
      <input @error('pais') style="border: 1px solid red" @enderror class="form-control mb-3" type="text" name="pais" placeholder="Ingrese Pais" />
      @error('pais')
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

