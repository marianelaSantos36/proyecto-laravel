<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Spatie\FiareClient\Views;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index() {
        $productos = Producto::all();
        return view('producto.productos', ["productos"=> $productos]);
    }
    
    public function crear(){
        return view('producto.creando');
    }


    public function show($id) {
        $productos = Producto::findOrFail($id);
        return view('producto.verProducto',["datos"=> $productos]);
    }


    public function store(Request $request){

        $validatedData= $request->validate([
            'Nombre' => 'required|string|max:255|unique:productos,nombre',
            'stock' => 'required|integer|min:0',
            'PrecioUnitario' => 'required|numeric|min:0',
            'Descripcion' => 'nullable|string|max:1000',
        ]);
    
        Producto::create($validatedData);

        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
        
       // return 'se guardo correctamente los productos'. $request;
    }
   
    public function destroy($ProductoID) {
        $producto = Producto::findOrFail($ProductoID);
        $producto->delete(); 
    
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }
    


    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:255|unique:productos,Nombre,' . $id . ',ProductoID',  // Nota el cambio aquí
            'stock' => 'required|integer|min:0',
            'PrecioUnitario' => 'required|numeric|min:0',
            'Descripcion' => 'nullable|string|max:1000',
        ]);
        
    
        $producto = Producto::findOrFail($id);
        $producto->update($validatedData);
    
        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }
    

}