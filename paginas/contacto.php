<?php
// Configuración de la conexión
$servidor = "localhost:3307";
$usuario = "root";
$clave = "haider1028";
$bd = "base_tencocomputer";

// Conexión a la base de datos
$coneccion = mysqli_connect($servidor, $usuario, $clave, $bd);

// Verifica si la conexión es exitosa
if (!$coneccion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Variable para el mensaje de estado
$mensajeEstado = "";

if (isset($_POST['enviar'])) {
    // Capturar datos del formulario
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['email']; 
    $mensaje = $_POST['mensaje'];

    // Consulta SQL corregida
    $insertar = "INSERT INTO contacts (nombre, telefono, email, mensaje) 
                 VALUES ('$nombre', '$telefono', '$correo', '$mensaje')";

    // Ejecutar la consulta
    if (mysqli_query($coneccion, $insertar)) {
        $mensajeEstado = "Registro insertado exitosamente.";
    } else {
        $mensajeEstado = "Error al insertar: " . mysqli_error($coneccion);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>!Contactanos¡</title>
    <link rel="shortcut icon" href="../imagenes/trabajo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/contactanos.css">
    <link rel="stylesheet" href="../css/nosotros.css">

    <script>
        // Función para mostrar un mensaje de confirmación
        function mostrarAlerta(mensaje) {
            if (mensaje) {
                alert(mensaje);
            }
        }
    </script>
    
</head>
<body class="contac_cuerpo" onload="mostrarAlerta('<?php echo $mensajeEstado; ?>')">
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
                        <a href="contacto.php" class="barras_li">Contacto</a>
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
            <h1 class="noso_titulo">Contactanos</h1>
            <p class="noso_parrafo">Somos una empresa dedicada En La Cómputeria Soluciones Informáticas, somos especialistas en reparación de computadores, mantenimiento de computadores y consolas de videojuegos, Somos el mejor servicio técnico de dispositivos electronicos de Cali.</p>
        </section>  
        <main>
            <section class="contact-info">
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="info-text">
                        <p>Carrera 32 # 8-10</p>
                        <p>Cali, Colombia</p>
                    </div>
                </div>
        
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <div class="info-text">
                        <p>Lun-Vie: 8:00 am - 6:00 pm</p>
                        <p>Sábados: 8:00 am - 4:00 pm</p>
                    </div>
                </div>
        
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i><img src="../imagenes/facebook.svg"></a>
                    <a href="#" class="social-icon"><i class="fab fa-discord"></i><img src="../imagenes/discord.svg"></a>
                    <a href="#" class="social-icon"><i class="fab fa-youtube"></i><img src="../imagenes/youtube.svg"></a>
                    <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i><img src="../imagenes/wasap.svg"></a>
                    <a href="#" class="social-icon"><i class="fab fa-correo"></i><img src="../imagenes/correo.svg"></a>
                </div>
            </section>
        </main>
        <main>
           <section class="contact-formulario">
            <div class="formulario_conta">
                <div class="infor_conta">
                    <h2  class="titulo2">Contáctanos</h2>
                    <a href="#"><i class="fab fa-phone"></i><img src="../imagenes/telefono.svg">313-7753319</a>
                    <a href="#"><i class="fab fa-correo"></i><img src="../imagenes/gmail.svg"> Tecnocomputer@gmail.com</a>
                    <a href="#"><i class="fab fa-map-marked"></i><img src="../imagenes/mapa.svg"> Ciudad: Cali, Pais: Colombia</a> 
                </div>
                <form  method="POST" autocomplete="off">
                    <input type="text" name="nombre" placeholder="Tu Nombre completo" class="campo" required>
                    <input type="text" name="telefono" placeholder="Número..." class="campo" required>
                    <input type="email" name="email" placeholder="Tu Email" class="campo" required>
                    <textarea name="mensaje" placeholder="Tu Mensaje... ¡Cuéntanos!" required></textarea>
                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                    <script src="https://www.google.com/recaptcha/api.js?render=6LfUdNwqAAAAAF8uMHVJOKBu52oF--2BWsoseH38"></script>
                    <script>
                        grecaptcha.ready(function() {
                            grecaptcha.execute('6LfUdNwqAAAAAF8uMHVJOKBu52oF--2BWsoseH38', { action: 'submit' }).then(function(token) {
                                document.getElementById('g-recaptcha-response').value = token;
                            });
                        });
                    </script>
                    
                    <input type="submit" name="enviar" value="Enviar Mensaje" class="btn-enviar">
                </form>
            </div>
        </section>  
        </main>
        <footer class="footer">
            <section class="footer__container container_fooster">
                <div class="soli_container container">
                    <div class="soli_texto nav--footer">
                        <h2 class="titulo2"><a href="../index.html" class="barras_li">Tecnocomputer</a></h2>
                        <ul class="n_menu nav__link--footer">
                            <li class="li_estilos">
                                <a href="../index.php" class="barras_li">Inicio</a>
                            </li>
                            <li class="li_estilos">
                                <a href="../paginas/Solicitudes.php" class="barras_li">Solicitudes</a>
                            </li>
                            <li class="li_estilos">
                                <a href="contacto.php" class="barras_li">Contacto</a>
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
</body>
</html>