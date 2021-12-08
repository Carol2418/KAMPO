@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <div class="table-responsive"></div>
        <table class="table table-success" >
            <thead >
            <tr>
                <td>NOMBRE</td>
                <td>{{$product->name}}</td>
            </tr>
            <tr>
                <td>TIPO DE PRODUCTO</td>
                <td>{{$product->type}}</td>
            </tr>
            <tr>
                <td>FECHA DE VENCIMIENTO</td>
                <td>{{$product->expiration_date}}</td>
            </tr>
            <tr>
                <td>CANTIDAD DE PRODUCTO</td>
                <td>{{$product->quantity_units}}</td>
            </tr>
            <tr>
                <td>VALOR DEL PRODUCTO</td>
                <td>{{$product->minimum_value}}</td>
            </tr>
            <tr>
                <td>IMAGEN</td>
                <td>{{$product->image}}</td>
            </tr>
            <tr>
                <td>TIPO DE PAQUETE</td>
                <td>{{$product->packaging}}</td>
            </tr>
            <tr>
                <td>VALOR MINIMO</td>
                <td>{{$product->unit_value}}</td>
            </tr>
            <tr>
                <td>AGRICULTOR</td>
                <td>{{$product->farmer->user->full_name}}</td>
            </tr>
            </thead>
        </table>
        <a href="{{route('Products.index')}}" class="btn btn-success btn-sm">Volver al inicio</a>
        <a href="{{route('Products.edit', $product->id)}}" class="btn btn-success btn-sm">Editar Producto</a>
    </div>



@endsection

