<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>!Registrate</title>
    <link rel="shortcut icon" href="../imagenes/trabajo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilo-registro.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/normalize.css">
</head>
<body>
    <header class="barra">
        <nav class="nav container">
            <div class="n_logo">
                <h2 class="tituloA"><a href="../index.html" class="barras_li">Tecnocomputer</a></h2>
            </div>     
            
            <ul class="n_menu n_menu--link">
                <?php
                session_start();
                if (isset($_SESSION['usuario'])) {
                    echo "<p style='text-align:center;'>¡Bienvenido, " . $_SESSION['usuario'] . "!</p>";
                }
                ?>
                <div class="n_menu" id="user-info"></div>
                <li class="li_estilos">
                    <a href="../index.php" class="barras_li">Inicio</a>
                </li>
                <li class="li_estilos">
                    <a href="../paginas/Solicitudes.php" class="barras_li">Solicitudes</a>
                </li>
                <li class="li_estilos">
                    <a href="../paginas/contacto.php" class="barras_li">Contacto</a>
                </li>
                <li class="li_estilos">
                    <a href="../paginas/Registro.php" class="barras_li">Registro</a>
                </li>
                <li class="li_estilos">
                    <a href="../paginas/Nosotros.php" class="barras_li">Nosotros</a>
                </li>

                <img src="../imagenes/close.svg" class="n_salida">
            </ul>

                <div class="n_ficha">
                    <img src="../imagenes/menu.svg" class="n_imagen" alt="menu">
                </div>
        </nav>   
    </header>
    <main>
    <div class="contenedor__todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn__iniciar-sesion">Iniciar Sesión</button>
            </div>
            <div class="caja__trasera-register">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Regístrate para que puedas iniciar sesión</p>
                <button id="btn__registrarse">Regístrarse</button>
            </div>
        </div>

        
        <div class="contenedor__login-register" >
       
           <form class="formulario__login" action="../api/sesion.php" method="POST">
                <h2>Iniciar Sesión</h2>
                <input type="text" id="usuario" name="usuario" placeholder="Correo o Usuario" required />
                <input type="password" id="password" name="contrasena" placeholder="Contraseña" required />
                <button type="submit">Entrar</button>
                <div class="password-olvidada">
                        <a href="../contraseña/recuperar.php">¿Olvidaste tu contraseña?</a>
                    </div>
            </form>

            
           <form class="formulario__register" action="../api/registrar.php" method="POST">
                <h2>Registrarte</h2>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre completo" required />
                <input type="email" id="correo" name="correo" placeholder="Correo electrónico" required />
                <input type="text" id="nuevo_usuario" name="usuario" placeholder="Nombre de usuario" required />
                <input type="password" id="nuevo_password" name="contrasena" placeholder="Contraseña" required />
                <button type="submit">Registrarse</button>
            </form>
        </div>
    </div>

</main>

<footer class="footer">
    <section class="footer__container container_fooster">
        <div class="soli_container container">
            <div class="soli_texto nav--footer">
                <h2 class="titulo2"><a href="../index.html" class="barras_li">Tecnocomputer</a></h2>
                <ul class="n_menu nav__link--footer">
                    <li class="li_estilos">
                        <a href="../paginas/Solicitudes.php" class="barras_li">Solicitudes</a>
                    </li>
                    <li class="li_estilos">
                        <a href="../paginas/contacto.php" class="barras_li">Contacto</a>
                    </li>
                    <li class="li_estilos">
                        <a href="../paginas/Registro.php" class="barras_li">Registro</a>
                    </li>
                    <li class="li_estilos">
                        <a href="../paginas/Nosotros.php" class="barras_li">Nosotros</a>
                    </li>
                    <li class="li_estilos">
                        <a href="../api/logout.php?salida=ok" class="barras_li">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
            <figure class="footer_figura">
                <img src="../imagenes/trabajo.png" class="footer__foto">
            </figure>
        </div>
    </section>

    <section class="footer__copy container">
        <div class="footer__social">
            <a href="#" class="footer__icons"><img src="../imagenes/facebook.svg" class="footer__img"></a>
            <a href="#" class="footer__icons"><img src="../imagenes/discord.svg" class="footer__img"></a>
            <a href="#" class="footer__icons"><img src="../imagenes/correo.svg" class="footer__img"></a>
        </div>
        <h3 class="footer__copyright">Derechos reservados &copy; Jaider Carmona</h3>
    </footer>


<script src="../js/registro_animacion.js"></script>
<script src="../js/auth.js"></script>
<script src="../js/menu.js"></script>

</body>
</html>
    
</body>
</html>