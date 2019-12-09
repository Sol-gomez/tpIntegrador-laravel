<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class HomeController extends Controller
{
    public function mostrarProductos(){
        return view('productos')->with('productos', Producto::all());
    }
}
