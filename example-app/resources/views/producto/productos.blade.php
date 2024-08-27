@extends('body.cuerpo')
@extends('navbar.navbar')
@section('navbar')
@section('title', 'Producto')

@section('cuerpo')
    <h1 class="text-center">Productos</h1>
    <div class="container">
     <a href="{{ route('productos.crear') }}" class="btn btn-warning">Agregar producto</a>
        <h2 class="text-center ">Lista de Productos</h2>
        <table class="table  table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $index => $item)
                    <tr>
                        <th scope="row" class="text-center">{{ $index + 1 }}</th>
                        <td>{{ $item->Nombre }}</td>
                        <td>${{ number_format($item->PrecioUnitario, 2) }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>{{ $item->Descripcion }}</td>
                        
                        <td><a href="{{route('productos.show', $item->ProductoID)}}" class="btn btn-primary">Editar</a></td>
                        <form action="{{route('productos.delete', $item->ProductoID)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
                        </form>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection()
