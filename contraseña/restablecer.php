<?php
include '../api/conexion.php';

$token = $_GET['token'];
$query = "SELECT * FROM usuarios WHERE reset_token='$token' AND token_expira > NOW()";
$result = $conexion->query($query);

if ($result->num_rows > 0) {
?>
<!DOCTYPE html>
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
                <h1 class="cuerpo_titulo">Restablece tu contraseña</h1>
            </section>
    </header>
    <div class="contenedor">
        <div class="right-form">
            <form action="guardar_nueva.php" method="POST" class="formulario">
                <div class="input">
                    <input type="hidden" name="token" value="<?= $token ?>">
                </div>
                <div class="input">
                    <input type="password" name="nueva" placeholder="Nueva contraseña" required>
                </div>
                <div class="input">
                    <button type="submit">Guardar nueva contraseña</button>
                </div>
            </form>
        </div>    
    </div>
<?php
} else {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer cuenta</title>
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
                     <?php
                        echo "El enlace ha expirado o no es válido.";
                    }
                    ?>
                </h1>
            </section>
    </header>

   
</body>

