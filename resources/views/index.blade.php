@extends('layouts.main')
@section('content')
    <h2 class="ad_producto">Administración de los Productos</h2>
    <br>
    <a href="/createProduct">Incluir un producto</a>    
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre del Producto</th>
               
                <th>Ver</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($productos as $producto)
                <tr>
                <td>{{$producto->id}}</td>
                    <td>{{$producto->name}}</td>
                    
                
                    <td><a href="/showProduct/{{$producto->id}}">Ver</a></td>
                    <td><a href="/editProduct/{{$producto->id}}">Editar</a></td>    
                    <td><a href="/deleteProduct/{{$producto->id}}">Borrar</a></td>
                </tr>
                @endforeach
        </tbody>

    </table>

@endsection