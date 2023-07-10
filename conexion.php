<?php
// Datos de conexión a la base de datos
$host = 'localhost';
$usuario = 'root';
$contraseña = ''; // Contraseña de tu servidor de base de datos
$base_datos = 'tiendamm';

// Crear la conexión a la base de datos
$conexion = mysqli_connect($host, $usuario, $contraseña, $base_datos);

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}
?>