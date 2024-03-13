<?php
// Establece la conexión a la base de datos
$conex = mysqli_connect("localhost", "root", "ADMIN", "system_qr");

// Verifica la conexión
if (mysqli_connect_errno()) {
    echo "Error al conectar con la base de datos: " . mysqli_connect_error();
    exit();
}
?>
