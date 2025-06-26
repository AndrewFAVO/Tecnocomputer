<?php
include '../api/conexion.php';
session_start();

if ($_SESSION['rol'] !== 'admin') {
    header("Location: Registro.php");
    exit;
}

$id = $_GET['id'];
$query = "SELECT * FROM usuarios WHERE id='$id'";
$usuario = $conexion->query($query)->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
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
                    <?php echo "Editar Cuenta"?>
                </h1>
            </section>
    </header>
    <div class="contenedor">
            <div class="right-form">
            <form class="formulario" action="guardar_edicion.php" method="POST">
                <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
                
                <label>Nombre:</label>
            <div class="input">
                <input type="text" name="nombre" value="<?= $usuario['nombre_completo'] ?>" required><br>
            </div>
            <div class="input">
                <label>Correo:</label>
                <input type="email" name="correo" value="<?= $usuario['correo'] ?>" required><br>
            </div>
                <label>Usuario:</label>
                <input type="text" name="usuario" value="<?= $usuario['usuario'] ?>" required><br>
            <div class="input">
                <label>Rol:</label>
                <select name="rol">
                    <option value="usuario" <?= $usuario['rol'] === 'usuario' ? 'selected' : '' ?>>Usuario</option>
                    <option value="admin" <?= $usuario['rol'] === 'admin' ? 'selected' : '' ?>>Administrador</option>
                </select><br><br>
            </div>
            <div class="input">
            <button type="submit">Guardar cambios</button>
            </div>
            </form>
</div>
</body>
</html>
