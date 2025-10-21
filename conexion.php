<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "prueba_ya";

try {
    $conexion = new mysqli($host, $usuario, $contrasena, $base_datos);
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    echo "Conexion exitosa";
} catch (Exception $e) {
    die("Error al conectar a la base de datos: " . $e->getMessage());
}
?>
