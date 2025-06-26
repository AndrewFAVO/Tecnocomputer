<?php
include '../api/conexion.php';

$token = $_POST['token'];
$nueva = password_hash($_POST['nueva'], PASSWORD_DEFAULT);

$query = "UPDATE usuarios SET contrasena='$nueva', reset_token=NULL, token_expira=NULL WHERE reset_token='$token'";
$conexion->query($query);
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
                    <?php echo "¡Contraseña actualizada con éxito! Ya puedes iniciar sesión."; ?>
                </h1>
                <a href='../paginas/Registro.php' class='Registro'>Volver</a>
            </section>
    </header>
</body>



