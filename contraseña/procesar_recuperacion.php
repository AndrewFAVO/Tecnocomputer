<?php
include '../api/conexion.php';

$correo = $_POST['correo'];
$token = bin2hex(random_bytes(16));
$expira = date("Y-m-d H:i:s", strtotime("+1 hour"));

$query = "UPDATE usuarios SET reset_token='$token', token_expira='$expira' WHERE correo='$correo'";
$conexion->query($query);

// Enviar por correo (en pruebas lo puedes mostrar así):
echo "Copia y pega este enlace en tu navegador:<br>";
echo "<a href='restablecer.php?token=$token'>Restablecer contraseña</a>";
?>

