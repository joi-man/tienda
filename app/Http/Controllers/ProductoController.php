<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        return view('productos.index', [
            'productos' => Producto::orderBy('id')->get(),
        ]);
    }
}
