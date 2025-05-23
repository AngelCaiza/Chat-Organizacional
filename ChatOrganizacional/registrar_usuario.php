<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "usuario_db", "contraseña_db", "nombre_db");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, apellido, correo_electronico, contraseña) VALUES ('$nombre', '$apellido', '$email', '$password')";

if ($conexion->query($sql) === TRUE) {
    echo "Usuario registrado exitosamente";
} else {
    echo "Error al registrar usuario: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
