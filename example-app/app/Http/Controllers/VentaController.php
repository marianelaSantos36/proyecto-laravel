<?php

namespace App\Http\Controllers;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index() {
        // Obtener todas las ventas, incluyendo la relación con producto

        $productos = Venta::all();
        return view('ventas.index', ["ventas"=> $productos]);

       
    }
}
