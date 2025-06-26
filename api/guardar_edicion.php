<?php
include '../api/conexion.php';
session_start();

if ($_SESSION['rol'] !== 'admin') {
    header("Location: Registro.php");
    exit;
}

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$rol = $_POST['rol'];

$query = "UPDATE usuarios SET nombre_completo='$nombre', correo='$correo', usuario='$usuario', rol='$rol' WHERE id='$id'";
$conexion->query($query);

header("Location: ../paginas/admin.php");
exit;
