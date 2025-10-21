<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $tema = trim($_POST["subject"]);
    $mensaje = trim($_POST["message"]);

    if (!empty($nombre) && !empty($email) && !empty($tema) && !empty($mensaje)) {

        $stmt = $conexion->prepare("INSERT INTO mensajes (nombre, email, tema, mensaje) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nombre, $email, $tema, $mensaje);

        if ($stmt->execute()) {
            echo "Guardado";
        } else {
            echo "Error " . $conexion->error;
        }

        $stmt->close();
        $conexion->close();

    } else {
        echo "Por favor completa todos los campos.";
    }

} else {
    echo "Acceso no permitido.";
}
?>
