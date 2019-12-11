<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<div class= "container">
    <br>
    <div  class="card">
      <div class="card-header">
        <h2>Registro</h2>
      </div>     
      <div class="card-body">
    <!-- Registro -->
              <form class="form" name="formRegistro"  novalidate action="/registro" method="POST" enctype="multipart/form-data">
              {{csrf_field()}} 
                    <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="nombre">Nombre</label>
                                    <input requiered name="nombre" type="text" value= "<?=isset($errores['usuario'])? "":old('usuario') ;?>" class="form-control" id="nombre" placeholder="Nombre completo">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputApellido">Apellido</label>
                                    <input requiered name="apellido" type="text" value=" <?=isset($errores['apellido'])?"":old('apellido');?>" class="form-control" id="apellido" placeholder="Apellido">
                                  </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input requiered type="email" name="email" class="form-control" id="inputEmail4" placeholder="Ingrese su correo electronico" value="<?=isset($errores['email'])?"":old('email');?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="password">Contraseña</label>
                        <input requiered type="password" value="" name = "password"  class="form-control" id="password" placeholder="Password">
                      </div>
                      <!-- <div class="form-group col-md-6">
                        <label for="password">Repetir contraseña</label>
                        <input requiered type="password" name="contraseña2" value=""  class="form-control" id="repassword" placeholder="Repetir password">
                      </div>
                    </div> -->

                    <!-- <div class="form-group">
                      <label for="inputAddress">Dirección</label>
                      <input requiered type="text" name="direccion" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Ciudad</label>
                        <input type="text" name="ciudad" class="form-control" id="inputCity">
                      </div>  -->
                      
                      
                    <!-- <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <input required name="avatar" type="file" value= "" class="form-control" id="avatar" >
                      </div> --> 
                      
                    </div>   
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                    <a href="#" class="btn btn-link">Ya poseo una cuenta</a>
                  </form>
                  </div>                            
        </div>
    </div>
</body>
</html>