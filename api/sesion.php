<?php
session_start();
include 'conexion.php';
session_start();
if (isset($_SESSION['usuario'])) {
    echo "<p style='text-align:center;'>¡Bienvenido, " . $_SESSION['usuario'] . "!</p>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Login
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "SELECT * FROM usuarios WHERE usuario='$usuario' OR correo='$usuario'";
    $resultado = $conexion->query($query);

    if ($row = $resultado->fetch_assoc()) {
        if (password_verify($contrasena, $row['contrasena'])) {
            $_SESSION['usuario'] = $row['usuario'];
            header("Location: ../paginas/Registro.php");
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Consultar sesión
    echo $_SESSION['usuario'] ?? '';
} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // Cerrar sesión
    session_destroy();
}
?>
