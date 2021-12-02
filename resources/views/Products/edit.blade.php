@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <form action="{{route('Products.update',$product->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="table-responsive"></div>
            <table class="table table-success" >
                <thead >
                <tr>
                    <td>NOMBRE</td>
                    <td><input type="text" class="form-control" name="name" value="{{$product->name}}"></td>
                </tr>
                <tr>
                    <td>TIPO DE PRODUCTO</td>
                    <td><input type="text" class="form-control" name="type" value="{{$product->type}}"></td>
                </tr>
                <tr>
                    <td>FECHA DE VENCIMIENTO</td>
                    <td><input type="text" class="form-control" name="expiration_date" value="{{$product->expiration_date}}"></td>
                </tr>
                <tr>
                    <td>CANTIDAD DE PRODUCTO</td>
                    <td><input type="text" class="form-control" name="quantity_units" value="{{$product->quantity_units}}"></td>
                </tr>
                <tr>
                    <td>VALOR DEL PRODUCTO</td>
                    <td><input type="text" class="form-control" name="minimum_value" value="{{$product->minimum_value}}"></td>
                </tr>
                <tr>
                    <td>IMAGEN</td>
                    <td><input type="text" class="form-control" name="image" value="{{$product->image}}"></td>
                </tr>
                <tr>
                    <td>TIPO DE PAQUETE</td>
                    <td><input type="text" class="form-control" name="packaging" value="{{$product->packaging}}"></td>
                </tr>
                <tr>
                    <td>VALOR MINIMO</td>
                    <td><input type="text" class="form-control" name="unit_value" value="{{$product->unit_value}}"></td>
                </tr>
                <tr>
                    <td>NOMBRE DEL AGRICULTOR</td>
                    <td class="form-group">
                        <select required name="farmers_id" id="farmers_id" class="form-control">
                            <option value="">Seleccione el agricultor</option>
                            @foreach($p as $id => $full_name)
                                <option value="{{$id}}"{{$id == old('farmers_id', $product->farmers_id) ? 'selected' : ''}}>{{$full_name}}</option>
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
