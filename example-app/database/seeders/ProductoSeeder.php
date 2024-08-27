<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Asegúrate de importar la clase DB

class ProductoSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = [];
        for ($i = 0; $i < 5000; $i++) {
            $productos[] = [
                'Nombre' => 'Producto ' . $i,
                'PrecioUnitario' => rand(100, 1000),
                'stock' => rand(10, 100),
                'Descripcion' => 'Descripción del Producto ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('productos')->insert($productos);
    }
}
