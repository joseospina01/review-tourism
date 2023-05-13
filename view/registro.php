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
<?php
// Incluye el archivo de conexión
include 'controller\Conexion.php';

// Recupera los datos del formulario
$nombre = $_POST['nombre'];
$apellido=$_POST['apellido'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$celular = $_POST['celular'];
$genero = $_POST['genero'];



// Inserta los datos del usuario en la tabla de usuarios
$sql = "INSERT INTO registro (Nombre, apellido, correo, contraseña, celular,genero) VALUES ('$nombre', '$apellido', '$correo','$contraseña','$celular','$genero')";
if (mysqli_query($conn, $sql)) {
    echo "Usuario registrado exitosamente
    <a href='login.php' class='btn alert alert-success'>ir al inicio de sesion</a>
    ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Cierra la conexión
mysqli_close($conn);
?>
</body>
</html>