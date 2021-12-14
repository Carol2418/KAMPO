@extends('layouts.app')
<br>
@section('content')
    <div class="container">

        <br>
        <div class="table-responsive"></div>
        @if(session('success'))
        <div class="alert alert-warning" role="success">
        {{session('success')}}
        </div>
        @endif
        
        <table class="table table-striped">
            <thead class="table-success">
            <tr>

                <th>ROL</th>
                <th>NUMERO DE IDENTIFICACIÓN</th>
                <th>NOMBRE COMPLETO</th>
                <th>CIUDAD</th>
                <th>ACCIONES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->document_number}}</td>
                    <td>{{$user->full_name}}</td>
                    <td>{{$user->city}}</td>
                    <td>
                        <form action="{{route('Users.destroy', $user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('Users.show',$user->id)}}" class="btn btn-success btn-sm">Detalles</a>
                            <a href="{{route('Users.edit',$user->id)}}" class="btn btn-success btn-sm">Editar</a>
                            <button type="submit" class="btn btn-success btn-sm">Eliminar </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection
