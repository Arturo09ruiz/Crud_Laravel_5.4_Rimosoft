@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Listado de Productos
        <a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Nuevo</a>
        </h2>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th width="20px">ID</th>
                    <th>Nombre del Producto</th>
                    <th colspan="3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <th>{{ $product->id }}</th>
                    <th> <strong>{{ $product->name }}</strong>
                        {{ $product->short }}
                    </th>
                    <th>Ver</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->render() }}
    </div>    
    <div class="col-sm-4">
        Mensaje
    </div>
@endsection