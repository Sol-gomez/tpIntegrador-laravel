@extends('layouts.app')
@section('content')
<div class="container-fluid">
      <header class="navbar-nav">
        <div class="pos-f-t">
          <div class=" dropdown collapse" id="navbarToggleExternalContent">
                      <div class="bg-dark p-4">
                        <a class="dropdown-item" href="#home_s">Home</a>
                        <a class="dropdown-item" href="#productos_s">Productos</a>
                        <a class="dropdown-item" href="#faq_s">F.A.Q</a>
                        <a class="dropdown-item" href="../tpIntegrador/registro.php">Registrarse</a>
                        <a class="dropdown-item" href="../tpIntegrador/inicioSesion.php">Ingresar</a>
                        <a class="dropdown-item" href="../tpIntegrador/perfil.php">Tu Perfil</a>
                        <a class="dropdown-item" href="#nosotros_s">Sobre Nosotros</a> 
                      
                      </div>
          </div>
      
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <h6>Categorias</h6>
            </button>
            <!--Boton Buscar -->
            <form class="form-inline my-2 my-lg-0">
                <input class="control form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" >
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Ir</button>
              </form>
        </nav>   
    </div>
    <section class="profile">
      <div class="row">
        <div class="col-12">
                <div class="card hovercard bg-light m-1">
                    <div class="avatar mx-auto d-block">
                        <img class="rounded-circle"alt="" src="img/profile.png">
                    </div>
                    <div class="info">
                        <div class="title text-center text-white">
                            <a target="_blank" href="#">Juan Perez</a>
                        </div>
                        <section class="_dataUsuario mx-auto d-block col-4 col-lg-4 col-md-4">
                          <ul class="list-group text-center">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Info del usuario
                              <span class="badge badge-primary badge-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Info del usuario
                              <span class="badge badge-primary badge-pill">2</span>
                             </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Info del usuario
                              <span class="badge badge-primary badge-pill">1</span>
                              </li>
                          </ul>
                    </div>
                    <div class="bottom m-1">
                        <a class="btn btn-info btn-sm" href="https://twitter.com">
                            <img class="-iconos" src="img/twitter4.png" alt="">
                        </a>
                        <a class="btn btn-danger btn-sm" rel="publisher" href="https://plus.google.com">
                           <img class="-iconos" src="img/google.png" alt="">
                        </a>
                        <a class="btn btn-primary btn-sm" rel="publisher" href="https://facebook.com">
                           <img class="-iconos" src="img/facebook.png" alt="">
                        </a>
                        <a class="btn btn-secondary btn-sm" rel="publisher" href="https://instagram.com">
                           <img class="-iconos" src="img/insta.png" alt="">
                        </a>
                    </div>
                </div>
    
            </div>
    
      </div>
      
    </section>
      <section class="card">
            <article class="card text-center">
                    <article class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">En venta</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Vendido</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active">Por confirmar</a>
                        </li>
                      </ul>
                    </article>
                    <section class="card-deck">  
                    <article class="card-body align-items-center">
                            <article class="_cajas col  card float-left" style="width: 17rem;">
                                    <img src="img/celular.webp" class="card-img-top img-fluid m-1" alt="...">
                                    <article class="card-body">
                                      <h5 class="card-title">Nombre Producto</h5>
                                      <p class="card-text">Un breve desarrollo del producto.</p>
                                      <a href="#" class="btn btn-primary">Ofrecer</a>
                                      <div class="card-footer m-1">
                                        <small class="text-muted">Publicado el xx de xx del xx</small>
                                      </div>
                                    </article>
                                </article>
                            <article class="_cajas col  card float-left" style="width: 17rem;">
                                    <img src="img/mesa.jpg" class="card-img-top img-fluid m-1" alt="...">
                                    <article class="card-body">
                                       <h5 class="card-title">Nombre Producto</h5>
                                       <p class="card-text">Un breve desarrollo del producto.</p>
                                       <a href="#" class="btn btn-primary">Ofrecer</a>
                                       <div class="card-footer m-1">
                                        <small class="text-muted">Publicado el dd de mm del aa</small>
                                      </div>
                                    </article>
                                </article>
                             <article class="_cajas col  card float-left" style="width: 17rem;">
                                    <img src="img/ropa1.jpg" class="card-img-top img-fluid m-1" alt="...">
                                    <article class="card-body">
                                        <h5 class="card-title">Nombre Producto</h5>
                                        <p class="card-text">Un breve desarrollo del producto.</p>
                                        <a href="#" class="btn btn-primary">Ofrecer</a>
                                        <div class="card-footer m-1">
                                          <small class="text-muted">Publicado el dd de mm del aa</small>
                                        </div>
                                    </article>
                                </article>
                              <article class="_cajas col  card float-left" style="width: 17rem;">
                                    <img src="img/ropa2.jpg" class="card-img-top img-fluid m-1" alt="...">
                                    <article class="card-body">
                                        <h5 class="card-title">Nombre Producto</h5>
                                        <p class="card-text">Un breve desarrollo del producto.</p>
                                        <a href="#" class="btn btn-primary">Ofrecer</a>
                                        <div class="card-footer m-1">
                                          <small class="text-muted">Publicado el dd de mm del aa</small>
                                        </div>
                                    </article>
                                </article>
                              <article class="_cajas col  card float-left" style="width: 17rem;">
                                    <img src="img/ropa3.jpg" class="card-img-top img-fluid m-1" alt="...">
                                    <article class="card-body">
                                        <h5 class="card-title">Nombre Producto</h5>
                                        <p class="card-text">Un breve desarrollo del producto.</p>
                                        <a href="#" class="btn btn-primary">Ofrecer</a>
                                        <div class="card-footer m-1">
                                          <small class="text-muted">Publicado el dd de mm del aa</small>
                                        </div>
                                    </article>
                                </article>
                                <article class="_cajas col  card float-left" style="width: 17rem;">
                                    <img src="img/ropa3.jpg" class="card-img-top img-fluid m-1" alt="...">
                                    <article class="card-body">
                                        <h5 class="card-title">Nombre Producto</h5>
                                        <p class="card-text">Un breve desarrollo del producto.</p>
                                        <a href="#" class="btn btn-primary">Ofrecer</a>
                                        <div class="card-footer m-1">
                                          <small class="text-muted">Publicado el dd de mm del aa</small>
                                        </div>
                                    </article>
                                </article>
                                <article class="_cajas col  card float-left" style="width: 17rem;">
                                    <img src="img/ropa3.jpg" class="card-img-top img-fluid m-1" alt="...">
                                    <article class="card-body">
                                        <h5 class="card-title">Nombre Producto</h5>
                                        <p class="card-text">Un breve desarrollo del producto.</p>
                                        <a href="#" class="btn btn-primary">Ofrecer</a>
                                        <div class="card-footer m-1">
                                          <small class="text-muted">Publicado el dd de mm del aa</small>
                                        </div>
                                    </article>
                                </article>
                                <article class="_cajas col  card float-left" style="width: 17rem;">
                                    <img src="img/ropa3.jpg" class="card-img-top img-fluid m-1" alt="...">
                                    <article class="card-body">
                                        <h5 class="card-title">Nombre Producto</h5>
                                        <p class="card-text">Un breve desarrollo del producto.</p>
                                        <a href="#" class="btn btn-primary">Ofrecer</a>
                                        <div class="card-footer m-1">
                                          <small class="text-muted">Publicado el dd de mm del aa</small>
                                        </div>
                                    </article>
                                </article>
                      </section>
                    </article>
            </article>
      </section>
      <footer class="footer">
            <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center ">
                      <li class="page-item">
                        <a class="page-link" href="#">Anterior</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Siguiente </a>
                      </li>
                    </ul>
                  </nav>
@endsection