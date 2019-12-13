@extends('layouts.main')
@section('content')
<main>
    <h2 class="__peliculasdeldia">Detalle del Producto</h2>

    <div class="_products row">
      <div class="d-flex card col-12  __itemproducto" style="width: 18rem;">
        
        <div>
            Nombre: {{$detalle->name}}
            <br>
            Descripcion: {{$detalle->description}}
            <br>
        </div>
        <a href="/adminProduct">Volver</a>    
                
        
      </div>
        
  </main>        
@endsection

