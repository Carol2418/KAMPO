@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <div class="table-responsive"></div>
        <table class="table table-success" >
            <thead >
            <tr>
                <td>DIRECCIÓN</td>
                <td>{{$farmer->address}}</td>
            </tr>
            <tr>
                <td>TIPO DE CULTIVO</td>
                <td>{{$farmer->crops}}</td>
            </tr>
            <tr>
                <td>TIPO DE TERRENO</td>
                <td>{{$farmer->land_type}}</td>
            </tr>
            <tr>
                <td>NOMBRE DEL AGRICULTOR</td>
                <td>{{$farmer->user->full_name}}</td>
            </tr>


            </thead>
        </table>
        <a href="{{route('Farmers.index')}}" class="btn btn-success btn-sm">Volver al inicio</a>
        <a href="{{route('Farmers.edit', $farmer->id)}}" class="btn btn-success btn-sm">Editar Agricultor</a>
    </div>



@endsection

