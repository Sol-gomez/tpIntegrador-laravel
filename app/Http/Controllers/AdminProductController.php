<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class AdminProductController extends Controller
{
    public function index(){
        $productos = Product::all();
        return view('index')->with('productos',$productos);
    }
    public function create(){
        $categorias = Category::all();
        return view('create')->with('categorias',$categorias);
    }
    public function save(Request $request){
        $reglas = [
            'name'=> 'required',
            'description'=>'required'
        ];

        $mensajes = [
            'name.required'=>'El campo nombre es requerido',
            'description.required'=>'Este campo es requerido'
        ];

        $this->validate($request,$reglas,$mensajes);
        $producto = new Product($request->all());
        $producto->save();
        return redirect('/adminProduct');
        
    }
    public function delete($id){
        $productoDelete = Product::find($id);
        $productoDelete->delete();
        return redirect('/adminProduct');
    }
}
