<?php
$conexion = new mysqli("localhost:3307", "root", "haider1028", "base_tencocomputer");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
