<?php
          session_start();
          include 'controller\conexion.php';

          if (isset($_POST['correo']) && isset($_POST['contraseña'])) {
            $correo = $_POST['correo'];
            $contraseña = $_POST['contraseña'];
            $sql = "SELECT  nombre FROM registro WHERE correo='$correo' AND contraseña='$contraseña'";
            $result = $conn->query($sql);
            if ($result->num_rows == 1) {
              $row = $result->fetch_assoc();
              $_SESSION['correo'] = $row['correo'];
              header("Location: home.php");
              exit();
            } else {
              $error = "Email o contraseña incorrectos. ";
              echo $error;
            }
          }

          // Proteger la página de inicio
          if (isset($_SESSION['correo'])) {
            header("Location: home.php");
            exit();
          }
          ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesión</title>
	<!-- Incluimos los estilos de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		body {
			background-color: #f5f5f5;
		}
		form {
			background-color: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
			margin-top: 50px;
		}
		h1 {
			text-align: center;
			margin-bottom: 30px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-4">
                
				<form class="form-signin" action="login.php" method="post">
                     
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                <img src="img/logo.jpg" alt="Logo" width="130">              
                 </a>
                 <h3>Inicio de sesión</h3>
                </nav>
					<label for="username" class="sr-only">Email</label>
					<input type="text" id="username" name="correo" class="form-control mb-3" placeholder="Email" required autofocus>

					<label for="password" class="sr-only">Contraseña</label>
					<input type="password" id="password" name="contraseña" class="form-control mb-3" placeholder="Contraseña" required>
					<button class="btn btn-lg btn-primary btn-block mb-3" type="submit">Iniciar sesión</button>   
                    	<div class="text-center">  
                        <a href='formulario.php'>Registrarse</a> 
                    </div>
                    <div class= "text-center">               
						<a href="#">¿Olvidaste tu contraseña?</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Incluimos los scripts de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>