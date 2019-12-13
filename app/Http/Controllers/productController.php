<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productController extends Controller
{
    
    public function index(){
        $productos = Products::paginate(5);
        return view('product')->with('productos',$productos);
    }
    public function show($id){
        $detalle = Products::find($id);
        return view('detalleProduct')->with('detalle',$detalle);
    }
}