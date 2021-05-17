@extends('template.main.index')
@section('title', 'Registrar clientes')
@section('icon', 'user')
@section('action')
    {{route('cliente.index')}}
@endSection
@section('placeholder', 'Razon social')
@section('content')
    <form action="{{route('cliente.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-3">
                <label for="persona_id">Persona</label>
                <select name="persona_id" id="persona_id" class="form-control">
                    <option value="">Seleccionar</option>
                    @foreach($personas as $persona)
                    <option value="{{$persona->id}}">{{$persona->nombre.' '.$persona->apellido}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label for="razon_social">Razon Social</label>
                <input type="text" name="razon_social" id="razon_social" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for="nit">NIT</label>
                <input type="text" name="nit" id="nit" class="form-control" required>
            </div>
            <div class="col-md-3">
                <input type="submit" value="Registrar" class="btn btn-success btn-block mt-button">
            </div>
        </div>
    </form>
@endSection