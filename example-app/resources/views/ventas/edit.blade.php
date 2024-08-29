@extends('body.cuerpo')
@extends('navbar.navbar')
@section('navbar')
@section('title', 'Editar Venta')

@section('cuerpo')
    <h1>Editar Venta</h1>
    <form action="{{ route('ventas.update', $venta->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="producto_id">Producto</label>
            <select name="producto_id" id="producto_id" class="form-control" required>
                <option value="">Selecciona un producto</option>
                @foreach($productos as $producto)
                    <option value="{{ $producto->ProductoID }}" 
                        {{ $producto->ProductoID == $venta->producto_id ? 'selected' : '' }}>
                        {{ $producto->Nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" 
                value="{{ $venta->cantidad }}" required>
        </div>
        <div class="form-group">
            <label for="precio_total">Precio Total</label>
            <input type="text" name="precio_total" id="precio_total" class="form-control" 
                value="{{ $venta->precio_total }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Venta</button>
    </form>
@endsection
