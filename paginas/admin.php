<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
    header("Location: Registro.php");
    exit;
}

include '../api/conexion.php';
$resultado = $conexion->query("SELECT id, nombre_completo, correo, usuario, rol, contrasena FROM usuarios");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperaste tu clave</title>
    <link rel="shortcut icon" href="../imagenes/trabajo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/normalize.css">
</head>
<body>
     <header class="cabeza">
        <nav class="nav container">
            <div class="n_logo">
                <h2 class="tituloA"><a href="../index.php" class="barras_li">Tecnocomputer</a></h2>
            </div>     

                <div class="n_ficha">
                    <img src="./imagenes/menu.svg" class="n_imagen" alt="menu">
                </div>
        </nav>    
        
            <section class="cuerpo_container container">
                <h1 class="cuerpo_titulo">
                    <?php echo "Lista los Usuarios ingresados"?>
                </h1>
            </section>
    </header>
    <div class="contenedor">
        <h2>Usuarios registrados</h2>
        <table border="1">
            <tr>
                <th>Nombre</th><th>Correo</th><th>Usuario</th><th>Rol</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['nombre_completo']) ?></td>
                <td><?= htmlspecialchars($row['correo']) ?></td>
                <td><?= htmlspecialchars($row['usuario']) ?></td>
                <td><?= htmlspecialchars($row['contrasena']) ?></td>
                <td><?= htmlspecialchars($row['rol']) ?></td>
                <td>
                <a href="../api/editar_edicion.php?id=<?= $row['id'] ?>">Editar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

