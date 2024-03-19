<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "ADMIN";
$database = "system_qr";

// Crear conexión
$conex = mysqli_connect($servername, $username, $password, $database);

// Verificar conexión
if (!$conex) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}




/* 
<?php
// Establece la conexión a la base de datos
$conex = mysqli_connect("localhost", "root", "ADMIN", "prueba");

// Verifica la conexión
if (mysqli_connect_errno()) {
    echo "Error al conectar con la base de datos: " . mysqli_connect_error();
    exit();
}
?>
*/