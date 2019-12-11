<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<header>
   <!-- colocar aqui navbar ... -->
  </header>
  <br>
  <br>
  
  <div class="container">
	<div class="d-flex justify-content-center h-80">
		<div class="card">
			<div class="card-header">
				<h3>Iniciar Sesion</h3>
				<div class="d-flex justify-content-end social_icon">
				</div>
			</div>
			<div class="card-body">
				<form method= "POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name = "usuario" class="form-control" placeholder="usuario (correo electronico)">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="contraseña" class="form-control" placeholder="contraseña">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox" name= "recordarme" value ="false">Recuerdame 
					</div>
					<div class="form-group">
						<input type="submit" value="Ingresar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					No tienes una cuenta?<a href="registro.blade.php">Registrate</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="olvideContraseña.php">Olvidaste tu contraseña?.</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>