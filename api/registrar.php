<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

// Verificar si el correo ya existe
$verifica = $conexion->query("SELECT * FROM usuarios WHERE correo='$correo'");
if ($verifica->num_rows > 0) {
    header("Location: ../paginas/Registro.php?error=correo_existente");
    exit;
}

// Si no existe, registrar nuevo usuario
$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) 
          VALUES('$nombre', '$correo', '$usuario', '$contrasena')";

if ($conexion->query($query)) {
    header("Location: ../paginas/Registro.php?registro=exito");
    exit;
} else {
    echo "Error al registrar: " . $conexion->error;
}
?>
