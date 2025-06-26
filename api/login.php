<?php
include 'conexion.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "SELECT * FROM usuarios WHERE usuario='$usuario' OR correo='$usuario'";
$resultado = $conexion->query($query);

if ($row = $resultado->fetch_assoc()) {
    if (password_verify($contrasena, $row['contrasena'])) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        header("Location: ../index.html");
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}
?>
