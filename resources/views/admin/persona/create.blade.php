@extends('template.main.index')
@section('title', 'Registrar personas')
@section('icon', 'user')
@section('action')
    {{route('persona.index')}}
@endSection
@section('placeholder', 'persona')
@section('content')
    <form action="{{route('persona.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-3">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for="celular">Celular</label>
                <input type="number" name="celular" id="celular" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for="ci">CI</label>
                <input type="number" name="ci" id="ci" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for="geolocalizacion">Geolocalización</label>
                <input type="text" name="geolocalizacion" id="geolocalizacion" class="form-control" required>
            </div>
            <div class="col-md-3">
                <input type="submit" value="Registrar" class="btn btn-success btn-block mt-button">
            </div>
        </div>
    </form>
@endSection