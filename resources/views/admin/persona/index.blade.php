@extends('template.main.index')
@section('css')
    <link rel="stylesheet" href="{{asset('css/custom-styles.css')}}">
@endSection
@section('icon', 'users')
@section('title', 'Gestionar personas')
@section('content-header')
    <a href="{{route('persona.create')}}" class="btn btn-primary">Agregar</a>
@endSection
@section('content')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>CI</th>
                <th>Celular</th>
                <th>Dirección</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personas as $persona)
                <tr>
                    <td>{{$persona->nombre}}</td>
                    <td>{{$persona->apellido}}</td>
                    <td>{{$persona->ci}}</td>
                    <td>{{$persona->celular}}</td>
                    <td>{{$persona->direccion}}</td>
                    <td>
                        <a href="{{route('persona.edit', $persona->id)}}" class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{route('persona.destroy', $persona->id)}}" class="btn btn-danger" onClick="return confirm('Desea eliminar el registro.?')">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>   
            @endforeach
        </tbody>
    </table>  
    {{$personas->render()}}
@endSection
