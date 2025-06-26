<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) 
          VALUES('$nombre', '$correo', '$usuario', '$contrasena')";

$conexion->query($query);
header("Location: ../index.html");
?>
