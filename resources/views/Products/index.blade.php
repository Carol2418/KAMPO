@extends('layouts.app')
<br>
@section('content')
    <div class="container">
        @role('admins')
        esto solo lo va a ver un admin
        @endrole

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

                <th>NOMBRE</th>
                <th>TIPO DE PRODUCTO</th>
                <th>IMAGEN</th>
                <th>ACCIONES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->type}}</td>
                    <td>
                    <img src="imagen/{{$product->image}}" width="60%">
                    </td>
                    <td>
                        <form action="{{route('Products.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('Products.show',$product->id)}}" class="btn btn-success btn-sm">Detalles</a>
                            <a href="{{route('Products.edit',$product->id)}}" class="btn btn-success btn-sm">Editar</a>
                            <button type="submit" class="btn btn-success btn-sm">Eliminar </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{route('Products.create')}}" class="btn btn-success  btn-sm mb-3 mt-3" >Registrar un nuevo producto</a>
    </div>



@endsection

