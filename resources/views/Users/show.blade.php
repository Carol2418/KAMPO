@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <div class="table-responsive"></div>
        <table class="table table-success" >
            <thead >
            <tr>
                <td>ROL</td>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <td>TIPO DE DOCUMENTO</td>
                <td>{{$user->document_type}}</td>
            </tr>
            <tr>
                <td>NUMERO DE IDENTIFICACÓN</td>
                <td>{{$user->document_number}}</td>
            </tr>
            <tr>
                <td>NOMBRE COMPLETO</td>
                <td>{{$user->full_name}}</td>
            </tr>
            <tr>
                <td>CIUDAD</td>
                <td>{{$user->city}}</td>
            </tr>
            <tr>
                <td>DEPARTAMENTO</td>
                <td>{{$user->state}}</td>
            </tr>
            <tr>
                <td>DIRECCIÓN</td>
                <td>{{$user->address}}</td>
            </tr>
            <tr>
                <td>EDAD</td>
                <td> {{$user->age}} </td>
            </tr>
            <tr>
                <td>GENERO</td>
                <td>{{$user->gender}}</td>
            </tr>
            <tr>
                <td>TELEFONO</td>
                <td>{{$user->phone}}</td>
            </tr>
            <tr>
                <td>CORREO</td>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <td>CONTRASEÑA</td>
                <td>{{$user->password}}</td>
            </tr>
            </thead>
        </table>
        <a href="{{route('Users.index')}}" class="btn btn-success btn-sm">Volver al inicio</a>
        <a href="{{route('Users.edit', $user->id)}}" class="btn btn-success btn-sm">Editar Usuario</a>
    </div>



@endsection
