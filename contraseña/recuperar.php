<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar cuenta</title>
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
                <h1 class="cuerpo_titulo">Recuperar contraseña</h1>
            </section>
    </header>
    <div class="contenedor">
        <div class="right-form">
            <form action="procesar_recuperacion.php" method="POST" class="formulario">
                <div class="input">
                    <input type="hidden" name="token" value="<?= $token ?>">
                </div>
                <div class="input">
                    <input type="email" name="correo" placeholder="Tu correo registrado" required />
                </div>
                <div class="input">
                    <button type="submit">Enviar enlace</button>
                </div>
            </form>
        </div>    
    </div>
</body>




