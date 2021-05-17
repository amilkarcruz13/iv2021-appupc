@extends('template.main.index')
@section('css')
    <link rel="stylesheet" href="{{asset('css/custom-styles.css')}}">
@endSection
@section('icon', 'users')
@section('title', 'Gestionar clientes')
@section('content-header')
    <a href="{{route('cliente.create')}}" class="btn btn-primary">Agregar cliente</a>
@endSection
@section('action')
    {{route('cliente.index')}}
@endSection
@section('placeholder', 'Razon social')
@section('content')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Razon Social</th>
                <th>NIT</th>
                <th>Celular</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->persona->nombre.' '.$cliente->persona->apellido}}</td>
                    <td>{{$cliente->razon_social}}</td>
                    <td>{{$cliente->nit}}</td>
                    <td>{{$cliente->persona->celular}}</td>
                    <td>
                        <a href="{{route('cliente.edit', $cliente->id)}}" class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{route('cliente.destroy', $cliente->id)}}" class="btn btn-danger" onClick="return confirm('Desea eliminar el registro.?')">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>   
            @endforeach
        </tbody>
    </table>  
    {{$clientes->render()}}
@endSection
