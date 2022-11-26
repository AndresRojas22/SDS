@extends('layouts.main')
@section('contenido')
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Crear de producto
                </div>
                <div class="card-body">
                    <form action="{{route ('products.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <input type="text" class="form-control" name ="description"><br>
                        </div>
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input type="number" class="form-control" name ="price"><br>
                        </div>
                        <button type="submit" class = "btn btn-primary">Guardar</button>
                        <a href="{{route('products.main')}}" class = "btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    