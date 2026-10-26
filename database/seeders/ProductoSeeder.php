<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $productos = [
            ['nombre' => 'Chipa', 'precio' => 5000],
            ['nombre' => 'Mbejú', 'precio' => 7000],
            ['nombre' => 'Cocido', 'precio' => 3000],
            ['nombre' => 'Sopa paraguaya', 'precio' => 8000],
            ['nombre' => 'Tereré', 'precio' => 10000],
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}
