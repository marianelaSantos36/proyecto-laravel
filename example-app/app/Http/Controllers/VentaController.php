<?php

namespace App\Http\Controllers;
use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index() {
        // Obtener todas las ventas, incluyendo la relación con producto

        $productos = Venta::all();
        return view('ventas.index', ["ventas"=> $productos]);
    }
    public function create()
    {
        $productos = Producto::all(); // Obtener todos los productos para el formulario
        return view('ventas.create', compact('productos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,ProductoID',
            'cantidad' => 'required|integer|min:1',
            'precio_total' => 'required|numeric|min:0',
        ]);

        Venta::create([
            'producto_id' => $request->input('producto_id'),
            'cantidad' => $request->input('cantidad'),
            'precio_total' => $request->input('precio_total'),
        ]);

        return redirect()->route('ventas.index')->with('success', 'Venta creada exitosamente.');
    }

}
