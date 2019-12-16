@extends("layouts.app")
@section("content")
<section class="profile">
      <div class="row">
        <div class="col-12">
                <div class="card hovercard bg-light m-right-1">
                    <div class="avatar mx-auto d-block">
                        <img class="rounded-circle"alt="" src="img/profile.png">
                    </div>
                    <div class="info">
                        <div class="title text-center text-white">
                            <a target="_blank" href="#"></a>
                        </div>
                        <section class="_dataUsuario mx-auto d-block col-4 col-lg-4 col-md-4">
                          <ul class="list-group text-center">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Cantidad de ventas
                              <span class="badge badge-primary badge-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Cantidad de compras
                              <span class="badge badge-primary badge-pill">2</span>
                             </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Por confirmar
                              <span class="badge badge-primary badge-pill">1</span>
                              </li>
                          </ul>
                    </div>
                    <div class="bottom m-right-1 mx-auto d-block">
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
                          <a class="nav-link active p-1" href="#">En venta</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active p-1" href="#">Vendido</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active p-1">Por confirmar</a>
                        </li>
                      </ul>
                    </article>
                    <section class="card-deck">  
                    <article class="card-body align-items-center">
                            <article class="_cajas col  card float-left" style="width: 17rem;">
                                    <img src="img/client-1.png" class="card-img-top img-fluid m-right-1" alt="...">
                                    <article class="card-body">
                                      <h5 class="card-title">Nombre Producto</h5>
                                      <p class="card-text">Un breve desarrollo del producto.</p>
                                      <a href="#" class="btn btn-primary">Ofrecer</a>
                                      <div class="card-footer m-right-1">
                                        <small class="text-muted">Publicado el xx de xx del xx</small>
                                      </div>
                                    </article>
                                </article>
                            <article class="_cajas col  card float-left" style="width: 17rem;">
                                    <img src="img/client-2.png"class="card-img-top img-fluid m-right-1" alt="...">
                                    <article class="card-body">
                                       <h5 class="card-title">Nombre Producto</h5>
                                       <p class="card-text">Un breve desarrollo del producto.</p>
                                       <a href="#" class="btn btn-primary">Ofrecer</a>
                                       <div class="card-footer m-right-1">
                                        <small class="text-muted">Publicado el dd de mm del aa</small>
                                      </div>
                                    </article>
                                </article>
                             <article class="_cajas col  card float-left" style="width: 17rem;">
                                    <img src="img/client-3.png" class="card-img-top img-fluid m-right-1" alt="...">
                                    <article class="card-body">
                                        <h5 class="card-title">Nombre Producto</h5>
                                        <p class="card-text">Un breve desarrollo del producto.</p>
                                        <a href="#" class="btn btn-primary">Ofrecer</a>
                                        <div class="card-footer m-right-1">
                                          <small class="text-muted">Publicado el dd de mm del aa</small>
                                        </div>
                                    </article>
                                </article>
                              <article class="_cajas col  card float-left" style="width: 17rem;">
                                    <img src="img/client-4.png" class="card-img-top img-fluid m-right-1" alt="...">
                                    <article class="card-body">
                                        <h5 class="card-title">Nombre Producto</h5>
                                        <p class="card-text">Un breve desarrollo del producto.</p>
                                        <a href="#" class="btn btn-primary">Ofrecer</a>
                                        <div class="card-footer m-right-1">
                                          <small class="text-muted">Publicado el dd de mm del aa</small>
                                        </div>
                                    </article>
                                </article>
                              <article class="_cajas col  card float-left" style="width: 17rem;">
                                    <img src="img/ropa3.jpg" class="card-img-top img-fluid m-right-1" alt="...">
                                    <article class="card-body">
                                        <h5 class="card-title">Nombre Producto</h5>
                                        <p class="card-text">Un breve desarrollo del producto.</p>
                                        <a href="#" class="btn btn-primary">Ofrecer</a>
                                        <div class="card-footer m-right-1">
                                          <small class="text-muted">Publicado el dd de mm del aa</small>
                                        </div>
                                    </article>
                                </article>
                                <article class="_cajas col  card float-left" style="width: 17rem;">
                                    <img src="img/ropa3.jpg" class="card-img-top img-fluid m-right-1" alt="...">
                                    <article class="card-body">
                                        <h5 class="card-title">Nombre Producto</h5>
                                        <p class="card-text">Un breve desarrollo del producto.</p>
                                        <a href="#" class="btn btn-primary">Ofrecer</a>
                                        <div class="card-footer m-right-1">
                                          <small class="text-muted">Publicado el dd de mm del aa</small>
                                        </div>
                                    </article>
                                </article>
                                <article class="_cajas col  card float-left" style="width: 17rem;">
                                    <img src="img/ropa3.jpg" class="card-img-top img-fluid m-right-1" alt="...">
                                    <article class="card-body">
                                        <h5 class="card-title">Nombre Producto</h5>
                                        <p class="card-text">Un breve desarrollo del producto.</p>
                                        <a href="#" class="btn btn-primary">Ofrecer</a>
                                        <div class="card-footer m-right-1">
                                          <small class="text-muted">Publicado el dd de mm del aa</small>
                                        </div>
                                    </article>
                                </article>
                                <article class="_cajas col  card float-left" style="width: 17rem;">
                                    <img src="img/ropa3.jpg" class="card-img-top img-fluid m-right-1" alt="...">
                                    <article class="card-body">
                                        <h5 class="card-title">Nombre Producto</h5>
                                        <p class="card-text">Un breve desarrollo del producto.</p>
                                        <a href="#" class="btn btn-primary">Ofrecer</a>
                                        <div class="card-footer m-right-1">
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