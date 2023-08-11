@extends('layouts.main')
@section('contenido')
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Actualizar de producto
                </div>
                <div class="card-body">
                    <form action="{{ route('products.update',$product) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" name ="Nombre" value="{{$product->Nombre}}"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <input type="text" class="form-control" name ="Descripcion" value="{{$product->Descripcion}}"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input type="number" class="form-control" name ="Precio" value="{{$product->Precio}}"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Cantidad</label>
                            <input type="number" class="form-control" name ="Cantidad" value="{{$product->Cantidad}}"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Proveedor</label>
                            <input type="text" class="form-control" name ="Proveedor" value="{{$product->Proveedor}}"><br>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Actualizar imagen <br><b>*Agregar imagen solo si se desea cambiar la existente</b></label>
                            <input type="file" class="form-control" name="Ruta" accept="image/*" src="{{$product->Ruta}}">
                        </div><br>
                        <button type="submit" class = "btn btn-success">Actualizar</button>
                        <a href="{{route('admin.Almacen')}}" class = "btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    