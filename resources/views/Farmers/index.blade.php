@extends('layouts.app')
<br>
@section('content')
    <div class="container">

        @role('admins')
        esto solo lo va a ver un admin
        @endrole

        <br>
        <div class="table-responsive"></div>
        <table class="table table-striped">
            <thead class="table-success">
            <tr>

                <th>DIRECCIÓN</th>
                <th>TIPO DE CULTIVO</th>
                <th>NOMBRE AGRICULTOR</th>
                <th>ACCIONES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($farmer as $item)
                <tr>
                    <td>{{$item->address}}</td>
                    <td>{{$item->crops}}</td>
                    <td>{{$item->user->full_name}}</td>

                    <td>
                        <form action="{{route('Farmers.destroy', $item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('Farmers.show',$item->id)}}" class="btn btn-success btn-sm">Detalles</a>
                            <a href="{{route('Farmers.edit',$item->id)}}" class="btn btn-success btn-sm">Editar</a>
                            <button type="submit" class="btn btn-success btn-sm">Eliminar </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{route('Farmers.create')}}" class="btn btn-success  btn-sm mb-3 mt-3" >Registrar un nuevo agricultor</a>
    </div>



@endsection

