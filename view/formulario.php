<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="img/logo.jpg" alt="Logo" width="130">
          </a>
          <h2>Formulario de Registro</h2>
        </nav>
    <div class="container mt-5">
      
      <form method="post" action="registro.php">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre">
        </div>
        <div class="form-group">
            <label for="apellido">apellido:</label>
            <input type="text" class="form-control" name="apellido" placeholder="Ingresa tu apellido">
          </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="correo" placeholder="Ingresa tu email">
        </div>
        <div class="form-group">
          <label for="contrasena">Contraseña:</label>
          <input type="password" class="form-control" name="contraseña" placeholder="Ingresa tu contraseña">
        </div>
        <div class="form-group">
          <label for="conf_contrasena">Confirmar Contraseña:</label>
          <input type="password" class="form-control" name="conf_contrasena" placeholder="Confirma tu contraseña">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" class="form-control" name="celular" placeholder="Ingresa tu número de teléfono">
          </div>
        <div class="form-group">
        <label for="genero">Género:</label>
      <select class="form-control" name="genero">
        <option value="">Selecciona tu género</option>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
        <option value="no-binario">otro</option>
      </select>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="enviar" >Registrarse</button>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
</html>