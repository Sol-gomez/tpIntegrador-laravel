<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;


class registroController extends Controller
{
    //
    public function crear (Request $req){
        $usuarioNuevo = new usuario();
        
        $usuarioNuevo->nombre = $req["nombre"];
        $usuarioNuevo->apellido = $req["apellido"];
        $usuarioNuevo->correo = $req["email"];
        $usuarioNuevo->password = $req["password"];
        $usuarioNuevo->save();
        return view('login');
    }

    public function validar(){

    }
}
