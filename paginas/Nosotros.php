<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="shortcut icon" href="../imagenes/trabajo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/nosotros.css">
    
    
</head>
<body class="nosotros_cuerpo">
    <header class="barra">
        <nav class="nav container">
            <div class="n_logo">
                <h2 class="tituloA"><a href="../index.php" class="barras_li">Tecnocomputer</a></h2>
            </div>     
            <ul class="n_menu n_menu--link">
                <?php
                session_start();
                if (isset($_SESSION['usuario'])) {
                    echo "<p style='text-align:center;'>¡Bienvenido, " . $_SESSION['usuario'] . "!</p>";
                }
                ?>
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

    <section class="noso_container container">
        <h1 class="noso_titulo">¿Quiene somos?</h1>
        <p class="noso_parrafo">Somos una empresa dedicada En La Cómputeria Soluciones Informáticas, somos especialistas en reparación de computadores, mantenimiento de computadores y consolas de videojuegos, Somos el mejor servicio técnico de dispositivos electronicos de Cali.</p>
    </section>
    
    <main>
        <section class="questions container">
            <h2 class="titulo2_a">Acerca de nosotros</h2>
       
        <section class="questions__container">
            <article class="questions__padding">
                <div class="questions__answer">
                    <h3 class="questions__title">Mision.
                        <span class="questions__arrow">
                            <img src="../imagenes/flecha_abaj.svg" class="questions__img">
                        </span>
                    </h3>

                    <p class="questions__show">Implementar y desarrollar un sistema para agilizar la movilidad del servicio, obviamente la ayuda de la 
                        página web de la empresa Tecnocomputer, para posicionar el negocio como un lugar cómodo, que sea 
                        competitivo y brinde el mejor servicio técnico en dispositivos. contribuyendo a que los clientes puedan 
                        encontrar un sitio agradable y una página web muy detallada para información y solicitudes. </p>
                </div>
            </article>

            <article class="questions__padding">
                <div class="questions__answer">
                    <h3 class="questions__title">Vision.
                        <span class="questions__arrow">
                            <img src="../imagenes/flecha_abaj.svg" class="questions__img">
                        </span>
                    </h3>

                    <p class="questions__show">Ser Reconocida a nivel nacional e internacional por los clientes que visitan la página web, como la 
                        principal gestora y facilitadora en la implementación en el servicio del Técnico en computadores y otros 
                        dispositivos. Un mejoramiento continuo de los procesos de información y tecnológicos que se consideren 
                        fundamentales para la Gobernación, los municipios, establecimientos públicos y entidades.
                        </p>
                </div>
            </article>

            <article class="questions__padding">
                <div class="questions__answer">
                    <h3 class="questions__title">Objetivos.
                        <span class="questions__arrow">
                            <img src="../imagenes/flecha_abaj.svg" class="questions__img">
                        </span>
                    </h3>

                    <p class="questions__show">Prestar servicio a los clientes o usuario, ayuda para empresa en las solicitudes que hacen 
                        fuera de la sede. Tambien tener la versión estable y lista para producción del software, que cumple con todos los requisitos y funcionalidades acordadas. Se realizará una implementación y despliegue exitoso del sistema en el entorno de producción</p>
                </div>
            </article>
         </section>
        </section> 
    </main>
        <section>
            <div class="fila">
                <div class="fila_item">
                    <img src="../imagenes/pin.svg" alt="Ubicación">
                    <p>Servico en todo colombia</p>
                </div>
                <div class="fila_item">
                    <img src="../imagenes/modelos.svg" alt="Todas las marcas">
                    <p>Todas las marcas, consola y computadores</p>
                </div>
                <div class="fila_item">
                    <img src="../imagenes/medalla.svg" alt="Mejor servicio">
                    <p>El mejor servicio</p>
                </div>
                <div class="fila_item">
                    <img src="../imagenes/llave.svg" alt="Reparación y Revisión">
                    <p class="">Reparación y Revisión asegurado.</p>
                </div>
            </div>
        </section>

        <section class="location">
            <h2 class="local_titu">Estamos Aquí</h2>
            <div class="map-container">
                <p class="questions__show">En el centro comercial Pasarela en Cali, el local principal de la empresa Tecnocomputer</p>
            <br>
            <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.519501873389!2d-76.53199781114502!3d3.4661996999999936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a615a38233e5%3A0x902921f7f517b0ec!2sCentro%20Comercial%20La%20Pasarela!5e0!3m2!1ses!2smx!4v1724025952275!5m2!1ses!2smx" 
                width="600" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    

    <footer class="footer">
        <section class="footer__container container_fooster">
            <div class="soli_container container">
                <div class="soli_texto nav--footer">
                    <h2 class="titulo2">Tecnocomputer</h2>
                    <ul class="n_menu nav__link--footer">
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

    <script src="../js/Acerca.js"></script>
</body>
</html>