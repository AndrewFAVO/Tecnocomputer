<?php
include '../api/conexion.php';

$token = $_GET['token'];
$query = "SELECT * FROM usuarios WHERE reset_token='$token' AND token_expira > NOW()";
$result = $conexion->query($query);

if ($result->num_rows > 0) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haz tu solicitud</title>
    <link rel="shortcut icon" href="../imagenes/trabajo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/normalize.css">
</head>
<body>
    <h1 class="cuerpo_titulo">Restablece tu contraseña</h1>
<form action="guardar_nueva.php" method="POST" class="formulario">
  <input type="hidden" name="token" value="<?= $token ?>">
  <input type="password" name="nueva" placeholder="Nueva contraseña" required>
  <button type="submit">Guardar nueva contraseña</button>
</form>
<?php
} else {
    echo "El enlace ha expirado o no es válido.";
}
?>
</body>

