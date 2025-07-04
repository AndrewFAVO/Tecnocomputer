<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnocomputer</title>
    <link rel="shortcut icon" href="./imagenes/trabajo.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    
    <header class="cuerpo">
        <nav class="nav container">
            <div class="n_logo">
                <h2 class="tituloA"><a href="index.html" class="barras_li">Tecnocomputer</a></h2>
            </div>     
            <ul class="n_menu n_menu--link">
                <?php
                session_start();
                if (isset($_SESSION['usuario'])) {
                    echo "<p style='text-align:center;'>¡Bienvenido, " . $_SESSION['usuario'] . "!</p>";
                }
                ?>
                <li class="li_estilos">
                    <a href="./paginas/registro.php" class="barras_li">Iniciar sesión</a>
                </li>
                <li class="li_estilos">
                    <a href="./paginas/Solicitudes.php" class="barras_li">Solicitudes</a>
                </li>
                <li class="li_estilos">
                    <a href="./paginas/contacto.php" class="barras_li">Contacto</a>
                </li>
                <li class="li_estilos">
                    <a href="./paginas/Registro.php" class="barras_li">Registro</a>
                </li>
                <li class="li_estilos">
                    <a href="./paginas/Nosotros.php" class="barras_li">Nosotros</a>
                </li>

                <img src="./imagenes/close.svg" class="n_salida">
            </ul>

                <div class="n_ficha">
                    <img src="./imagenes/menu.svg" class="n_imagen" alt="menu">
                </div>
        </nav>    
        
            <section class="cuerpo_container container">
                <h1 class="cuerpo_titulo">Bienvenidos a nuestra Pagina Web de Tecnocomputer.</h1>
                <p class="cuerpo_parrafo">Una pagina diseñada para las novedades, 
                    solicitudes y usuario para interactuar con el, servicio tecnico en computadores, laptops y consolas.
                    Tu nos cuentas qué sucede con tu consola o computador para poderte cotizar, asesorar o reparar.</p>
                <a href="paginas/Registro.php" class="Registro">Resgistrate ahora</a>
            </section>
    </header>

    <main>
        <section class="container seccion">
            <h2 class="tituloB">¿Qué servicio ofrece Tecnocomputer?</h2>
            <p class="info__paragraph"> Somos una empresa de mantenimiento de computadores y consolas de videojuegos en Cali, se incluye cualquier tipo de dispositivos electronicos.
               Tambien si eres un Gamer también hacemos un mantenimiento especial para jugar videojuegos. Se le hara mantenimiento principalmente a estos dispositivos:</p>
            <div class="seccion__lista">
                <article class="seccion__logos">
                    <img src="./imagenes/laptop.svg" class="Seccion_iconos">
                    <h3 class="Seccion_titulo">Mantenimiento para portátiles o laptops.</h3>
                    <p class="info__paragraph">
                        Mantenimiento de software o sistema del laptop
                        Mejoramos el rendimiento del sistema operativo o software de tu laptop, 
                        para que sea más rápida la carga de programas o sitios web.</p>
                        <img src="./imagenes/principal.jfif" class="seccion__img">
                    </article>

                <article class="seccion__logos">
                    <img src="./imagenes/mesa.svg" class="Seccion_iconos">
                    <h3 class="Seccion_titulo">Mantenimiento para computadores de mesa.</h3>
                    <p class="info__paragraph">Eliminar programas ocultos que no son necesario, Tambien el rendimiento del sistema operativo
                        y un armando y ensamble de sus partes. </p>
                        <img src="./imagenes/soporte-técnico.jpg" class="seccion__img">
                    </article>

                <article class="seccion__logos">
                    <img src="./imagenes/consolas.svg" class="Seccion_iconos">
                    <h3 class="Seccion_titulo">Reparación de consolas de videojuegos</h3>
                    <p class="info__paragraph">Se realiza una reparacion tanto para la consola como para los mandos, 
                    no importa la marca, el modelo y dispositivos. Se ofrece todo el cuidado y la reparación. </p>
                    <img src="./imagenes/Videoconsola_07.jpg" class="seccion__img">
                </article>
            </div>
        </section>

        <section class="soli">
            <div class="soli_container container">
                <div class="soli_texto">
                    <h2 class="titulo2">Si te interesa haz una solicitud para chequear o reparar tu dispositivo.</h2>
                    <p class="soli_parrafo"> Pulsa el botón para pedir una solicitud, con tu nombre de usuario de esta página web
                        te sera mas utíl para la mayor experiencia.</p>
                    <a href="paginas/Solicitudes.php" class="Registro">Ingresar</a>
                </div>
                <figure class="soli_figura">
                    <img src="./imagenes/42517.jpg" class="soli_img">
                </figure>
            </div>
        </section>
        <footer class="footer">
            <section class="footer__container container_fooster">
                <div class="soli_container container">
                    <div class="soli_texto nav--footer">
                    <h2 class="titulo2"><a href="../index.html" class="barras_li">Tecnocomputer</a></h2>
                        <ul class="n_menu nav__link--footer">
                            <li class="li_estilos">
                                <a href="index.php" class="barras_li">Inicio</a>
                            </li>
                            <li class="li_estilos">
                                <a href="./paginas/Solicitudes.php" class="barras_li">Solicitudes</a>
                            </li>
                            <li class="li_estilos">
                                <a href="./paginas/contacto.php" class="barras_li">Contacto</a>
                            </li>
                            <li class="li_estilos">
                                <a href="./paginas/Registro.php" class="barras_li">Registro</a>
                            </li>
                            <li class="li_estilos">
                                <a href="./paginas/Nosotros.php" class="barras_li">Nosotros</a>
                            </li>
                            <li class="li_estilos">
                                <a href="api/logout.php?salida=ok" class="barras_li">Cerrar sesión</a>
                            </li>
                        </ul>
                    </div>
                    <figure class="footer_figura">
                        <img src="./imagenes/trabajo.png" class="footer__foto">
                    </figure>
                </div>
            </section>

            <section class="footer__copy container">
                <div class="footer__social">
                    <a href="#" class="footer__icons"><img src="./imagenes/facebook.svg" class="footer__img"></a>
                    <a href="#" class="footer__icons"><img src="./imagenes/discord.svg" class="footer__img"></a>
                    <a href="#" class="footer__icons"><img src="./imagenes/correo.svg" class="footer__img"></a>
                </div>
                <h3 class="footer__copyright">Derechos reservados &copy; Jaider Carmona</h3>
            </footer>

            
            <script src="../js/menu.js"></script>
</body>
</html>