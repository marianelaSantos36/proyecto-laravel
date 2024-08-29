@extends('body.cuerpo')
@extends('navbar.navbar')
@section('navbar')
@section('title', 'Producto')

@section('cuerpo')
    <h1>Ventas</h1>
    <a href="{{ route('ventas.create') }}">Crear Nueva Venta</a>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
                <tr>
                    <td>{{ $venta->producto->Nombre }}</td>
                    <td>{{ $venta->cantidad }}</td>
                    <td>{{ $venta->precio_total }}</td>
                    <td>
                        <a href="{{ route('ventas.edit', $venta->id) }}">Editar</a>
                        <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
