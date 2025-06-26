<?php
session_start();
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "SELECT * FROM usuarios WHERE usuario='$usuario' OR correo='$usuario'";
    $resultado = $conexion->query($query);


    if ($resultado->num_rows === 0) {
    // El usuario no existe
    header("Location: ../paginas/Registro.php?error=usuario_inexistente");
    exit;
} else {
    $row = $resultado->fetch_assoc();

    if (!password_verify($contrasena, $row['contrasena'])) {
        // Contraseña incorrecta
        header("Location: ../paginas/Registro.php?error=contrasena_incorrecta");
        exit;
    } else {
        // Inicio de sesión exitoso
        $_SESSION['usuario'] = $row['usuario'];
        $_SESSION['rol'] = $row['rol'];

        if ($row['rol'] === 'admin') {
            header("Location: ../paginas/admin.php");
        } else {
            header("Location: ../paginas/Registro.php");
        }
        exit;
        }   
    }
}
?>

