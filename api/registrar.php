<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) 
          VALUES('$nombre', '$correo', '$usuario', '$contrasena')";
          $correo = $_POST['correo'];
$verifica = $conexion->query("SELECT * FROM usuarios WHERE correo='$correo'");

if ($verifica->num_rows > 0) {
    header("Location: ../paginas/Registro.php?error=correo_existente");
    exit;
}

$conexion->query($query);
header("Location: ../index.php");
?>
