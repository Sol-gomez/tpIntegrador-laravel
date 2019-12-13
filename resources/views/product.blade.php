@extends('layouts.main')
@section('content')
<main>
    <h2 class="ad_producto">Listado de Productos</h2>

    <div class="_productos row">
      <div class="d-flex card col-12  __itemProducto" style="width: 18rem;">
        <ul>
            @foreach ($productos as $producto)
                <li>
                    <a href="/detalleProduct/{{$producto->id}}">{{$producto->name}}</a> 
                            
                </li>
            @endforeach     
        </ul>
        <p>
            {{$productos->links()}}
        </p>
        
        
      </div>
        
  </main>        
@endsection