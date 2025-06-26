<?php
include '../api/conexion.php';

$token = $_POST['token'];
$nueva = password_hash($_POST['nueva'], PASSWORD_DEFAULT);

$query = "UPDATE usuarios SET contrasena='$nueva', reset_token=NULL, token_expira=NULL WHERE reset_token='$token'";
$conexion->query($query);

echo "¡Contraseña actualizada con éxito! Ya puedes iniciar sesión.";
?>
