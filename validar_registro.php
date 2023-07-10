<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Obtener los datos del formulario de registro
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$contraseña = $_POST['contrasena'];

// Crear la consulta para insertar los datos en la tabla
$consulta = "INSERT INTO usuario (nombre, apellido, email, contraseña) VALUES ('$nombre', '$apellido', '$email', '$contraseña')";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $consulta);

// Verificar si la consulta se ejecutó correctamente
if ($resultado) {
    // Redireccionar al usuario a la página de inicio o a cualquier otra página deseada
    header("Location: index.php");
    exit();
} else {
    // Manejar el error en caso de que la consulta no se haya ejecutado correctamente
    echo "Error al registrar el usuario: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>