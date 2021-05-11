@extends('template.main.index')
@section('title', 'Editar personas')
@section('icon', 'user')
@section('content')
<form action="{{route('persona.update', $persona->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-3">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{$persona->nombre}}" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" value="{{$persona->apellido}}"  class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" id="direccion" value="{{$persona->direccion}}"  class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for="celular">Celular</label>
                <input type="number" name="celular" id="celular" value="{{$persona->celular}}"  class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for="ci">CI</label>
                <input type="number" name="ci" id="ci" value="{{$persona->ci}}"  class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for="geolocalizacion">Geolocalización</label>
                <input type="text" name="geolocalizacion" id="geolocalizacion" value="{{$persona->geolocalizacion}}"  class="form-control" required>
            </div>
            <div class="col-md-3">
                <input type="submit" value="Editar" class="btn btn-success btn-block mt-button">
            </div>
        </div>
    </form>
@endSection