<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databasetr";

// Crea la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica la conexión
if (!$conn) {
    echo("Conexión fallida: " . mysqli_connect_error());
}else{ echo("Conexión exitosa: ");
}
?>