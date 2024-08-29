@extends('body.cuerpo')
@extends('navbar.navbar')
@section('navbar')
@section('title', 'Producto')

@section('cuerpo')
    <h1>Crear Nueva Venta</h1>
    <form action="{{ route('ventas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="producto_id">Producto</label>
            <select name="producto_id" id="producto_id" class="form-control" required>
                <option value="">Selecciona un producto</option>
                @foreach($productos as $producto)
                    <option value="{{ $producto->ProductoID }}">{{ $producto->Nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="precio_total">Precio Total</label>
            <input type="text" name="precio_total" id="precio_total" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Venta</button>
    </form>
@endsection
