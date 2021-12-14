@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <form action="{{route('Products.store')}}" method="post" >
            @csrf
            <div class="table-responsive"></div>
            <table class="table table-success" >
                <thead >
                <tr>
                    <td>NOMBRE DEL PRODUCTO</td>
                    <td><input type="text" class="form-control" name="name" value=""></td>
                </tr>
                <tr>
                    <td>TIPO DE PRODUCTO</td>
                    <td><input type="text" class="form-control" name="type" value=""></td>
                </tr>
                <tr>
                    <td>FECHA DE VENCIMIENTO</td>
                    <td><input type="date" class="form-control" name="expiration_date" value=""></td>
                </tr>
                <tr>
                    <td>CANTIDAD DE PRODUCTO</td>
                    <td><input type="text" class="form-control" name="quantity_units" value=""></td>
                </tr>
                <tr>
                    <td>VALOR DEL PRODUCTO</td>
                    <td><input type="text" class="form-control" name="minimum_value" value=""></td>
                </tr>
                <tr>
                    <td>IMAGEN</td>
                    <td><input type="file" class="form-control" name="image" value=""></td>
                </tr>
                <tr>
                    <td>TIPO DE PAQUETE</td>
                    <td><input type="text" class="form-control" name="packaging" value=""></td>
                </tr>
                <tr>
                    <td>VALOR MINIMO</td>
                    <td><input type="text" class="form-control" name="unit_value" value=""></td>
                </tr>
                <tr>
                    <td>NOMBRE DEL AGRICULTOR</td>
                    <td class="form-group">
                        <select required name="farmers_id" id="farmers_id" class="form-control">
                            <option value="">Seleccione el agricultor</option>
                            @foreach($Resul as $Resu)
                                <option value="{{$Resu->id}}">{{$Resu->full_name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>

                </thead>
            </table>
            <button type="submit" class="btn btn-success  btn-sm">Guardar Cambios</button>
            <a href="{{route('Products.index')}}" class="btn btn-success btn-sm">Volver al inicio</a>
        </form>
    </div>



@endsection

