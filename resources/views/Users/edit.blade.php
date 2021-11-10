@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <form action="{{route('Users.update',$user->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="table-responsive"></div>
            <table class="table table-success" >
                <thead >
                <tr>
                    <td>ROL</td>
                    <td><input type="text" class="Form-control" name="name" value="{{$user->name}}"></td>
                </tr>
                <tr>
                    <td>TIPO DE DOCUMENTO</td>
                    <td><input type="text" class="Form-control" name="document_type" value="{{$user->document_type}}"></td>
                </tr>
                <tr>
                    <td>NUMERO DE IDENTIFICACÓN</td>
                    <td><input type="text" class="Form-control" name="document_number" value="{{$user->document_number}}"></td>
                </tr>
                <tr>
                    <td>NOMBRE COMPLETO</td>
                    <td><input type="text" class="Form-control" name="full_name" value="{{$user->full_name}}"></td>
                </tr>
                <tr>
                    <td>CIUDAD</td>
                    <td><input type="text" class="Form-control" name="city" value="{{$user->city}}"></td>
                </tr>
                <tr>
                    <td>DEPARTAMENTO</td>
                    <td><input type="text" class="Form-control" name="state" value="{{$user->state}}"></td>
                </tr>
                <tr>
                    <td>DIRECCIÓN</td>
                    <td><input type="text" class="Form-control" name="address" value="{{$user->address}}"></td>
                </tr>
                <tr>
                    <td>EDAD</td>
                    <td><input type="text" class="Form-control" name="age" value="{{$user->age}}"></td>
                </tr>
                <tr>
                    <td>GENERO</td>
                    <td><input type="text" class="Form-control" name="gender" value="{{$user->gender}}"></td>
                </tr>
                <tr>
                    <td>TELEFONO</td>
                    <td><input type="text" class="Form-control" name="phone" value="{{$user->phone}}"></td>
                </tr>
                <tr>
                    <td>CORREO</td>
                    <td><input type="email" class="Form-control" name="email" value="{{$user->email}}"></td>
                </tr>
                <tr>
                    <td>CONTRASEÑA</td>
                    <td><input type="password" class="Form-control" name="password" value="{{$user->password}}"></td>
                </tr>
                </thead>
            </table>
            <button type="submit" class="btn btn-success  btn-sm">Guardar Cambios</button>
            <a href="{{route('Users.index')}}" class="btn btn-success btn-sm">Volver al inicio</a>
        </form>

    </div>



@endsection

