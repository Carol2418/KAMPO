@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <form action="{{route('Farmers.store')}}" method="post">
            @csrf
            <div class="table-responsive"></div>
            <table class="table table-success" >
                <thead >
                <tr>
                    <td>DIRECCIÓN</td>
                    <td><input type="text" class="form-control" name="address" value=""></td>
                </tr>
                <tr>
                    <td>TIPO DE CULTIVO</td>
                    <td><input type="text" class="form-control" name="crops" value=""></td>
                </tr>
                <tr>
                    <td>TIPO DE TERRENO</td>
                    <td><input type="text" class="form-control" name="land_type" value=""></td>
                </tr>
                <tr>
                    <td>NOMBRE DEL AGRICULTOR</td>
                    <td class="form-group">
                        <select required name="user_id" id="user_id" class="form-control">
                            <option value="">Seleccione un usuario</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->full_name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>


                </thead>
            </table>
            <button type="submit" class="btn btn-success  btn-sm">Guardar Cambios</button>
            <a href="{{route('Farmers.index')}}" class="btn btn-success btn-sm">Volver al inicio</a>
        </form>

    </div>



@endsection
