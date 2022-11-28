@extends('layouts/main')
@section('contenido')
    <div class="container"><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Listado de productos
                        <a href="{{route('admin.Create')}}" class="btn btn-success btn-md float-end">Nuevo producto</a>
                    </div>
                    <div class="card-body">
                        @if(session('info'))
                            <div class="alert alert-success">{{session('info')}}</div>
                        @endif
                        <table class="table table-hover table-md">
                            <thead>
                                <th>Nombre</th>
                                <th>Descripcion</th><br>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Cantidad</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                <td>
                                        {{ $product->Nombre }}
                                    </td>
                                    <td>
                                        {{ $product->Descripcion }}
                                    </td>
                                    <td>
                                        {{ $product->Precio }}
                                    </td>
                                    <td>
                                        {{ $product->Cantidad }}
                                    </td>
                                    <td>
                                        {{ $product->Proveedor }}
                                    </td>
                                    <td>
                                        {{-- <a href="{{route('products.edit',$product->id)}}"  --}} class="btn btn-warning btn-sm">Actualizar</a>

                                        
                                        <form action="{{ route('products.destroy', $product)}}" method = "POST">
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                            @method('delete')
                                            @csrf 
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        Bienvenido {{auth()->user()->name}}
                        <a href="javascript: document.getElementById('logout').submit()" class="btn btn-danger btn-md float-end">Cerrar sesion</a>
                        <form action="{{route('logout')}}" id="logout" style="display-none" method="POST">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    
   