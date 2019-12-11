<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Ejemplo ruta: 

// Route::get('/nombre que quieras q se vea en el navegador', function () {
//     return view('nombre del archivo .blade');
// });
Auth::routes();
//Ruta a inicio de sesion:
Route::get('/inicioSesion', function(){
    return view('inicioSesion');
});

//Ruta a perfil:
Route::get('/perfil', function(){
    return view('perfil');
});

//Ruta a index:
Route::get('/', function(){
    return view('index');
});

//Ruta a productos:
Route::get('/inicio', 'HomeController@mostrarProductos');


Route::get('/usuarioXid/1', 'registroController@traerUsuario');


Route::get('/home', 'HomeController@index')->name('home');
