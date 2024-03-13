<?php
// Incluye el archivo de conexión a la base de datos
include("conexion.php");

// Verifica si se han enviado datos del formulario de registro
if (isset($_POST['register'])) {
    // Obtén los datos del formulario y realiza la validación
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];
    $area = $_POST['area'];
    $eps = $_POST['eps'];
    $numero = $_POST['numero']; // Ajuste en el nombre del campo

    // Validación de datos
    if (empty($nombres) || empty($apellidos) || empty($cedula) || empty($area) || empty($eps) || empty($numero)) {
        echo 'Por favor completa todos los campos.';
    } else {
        try {
            // Validar formato del nombre
            if (!preg_match('/^[A-Za-zÁÉÍÓÚáéíóú\s]+$/', $nombres)) {
                throw new Exception('Formato de nombre incorrecto. No se permiten números ni caracteres especiales.');
            }

            // Validar formato del apellido
            if (!preg_match('/^[A-Za-zÁÉÍÓÚáéíóú\s]+$/', $apellidos)) {
                throw new Exception('Formato de apellido incorrecto. No se permiten números ni caracteres especiales.');
            }


            // Validar formato de la cédula
            if (!preg_match('/^[0-9]{10}$/', $cedula)) {
                throw new Exception('Formato de cédula incorrecto. Debe ser una cédula válida.');
            }

            // Validar formato del número
            if (!preg_match('/^[0-9]{9,10}$/', $numero)) {
                throw new Exception('Formato de número incorrecto. Debe tener entre 9 y 10 dígitos.');
            }


            // Crea la consulta SQL preparada
            $consulta = "INSERT INTO usuarios (nombres, apellidos, cedula, area, eps, numero, fecha, hora) VALUES (?, ?, ?, ?, ?, ?, CURDATE(), CURTIME())";

            // Prepara la consulta
            $stmt = mysqli_prepare($conex, $consulta);

            // Vincula los parámetros a la consulta
            mysqli_stmt_bind_param($stmt, "ssisss", $nombres, $apellidos, $cedula, $area, $eps, $numero);

            // Ejecuta la consulta
            if (mysqli_stmt_execute($stmt)) {
                echo '¡Registro exitoso!';
            } else {
                echo 'Hubo un error al registrar. Por favor, inténtelo de nuevo más tarde.';
            }

            // Cierra la declaración preparada
            mysqli_stmt_close($stmt);
        } catch (Exception $e) {
            // Manejo de excepciones: Mostrar un mensaje personalizado
            echo $e->getMessage();
        }
    }
}
