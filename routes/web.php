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
Route::get('/inicio', function(){
    return view('productos');
});

Route::get('/cargarProducto', function(){
    return view('cargarProducto');
});


//Ruta a cart: 
/*Route::get('/cart', function(){
    return view('cart');
});

//Ruta a cart: 
Route::get('/history', function(){
    return view('history');
});*/

Route::get('/cartHistory','CartController@cartclose');

Route::get('/cart','CartController@index');

Route::get('/userXid/1', 'registroController@traerUsuario');

Route::get('/home', 'HomeController@index')->name('home');

//Administrador de Productos : todas las funciones estan dentro del controller AdminProductController.
Route::get('/adminProducts', 'AdminProductController@index'); //para administrar un producto

Route::get('/createProduct','AdminProductController@create'); //para crear un producto

Route::get('/saveProduct', 'AdminProductController@save'); //para guardar un producto

Route::get('/deleteProduct', 'AdminProductController@delete'); //para borrar un product
