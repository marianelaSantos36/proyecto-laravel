@extends('body.cuerpo')
@extends('navbar.navbar')
@section('navbar')
@section('title', 'Creando')

@section('cuerpo')
    <h1>Agregar Producto</h1>
    <div class="container mt-5">
        <h2>Agregar Producto</h2>
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" required value="">
            </div>
            <div class="form-group">
                <label for="precio">Precio Unitario</label>
                <input type="number" class="form-control" id="PrecioUnitario" name="PrecioUnitario" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" required>
            </div>
           
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="Descripcion" name="Descripcion" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </form>
    </div>
@endsection()