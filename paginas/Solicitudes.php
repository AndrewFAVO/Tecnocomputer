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
    <main>
        <div class="contenedor">
            <!-- Contenido Izquierdo con Imagen -->
            <div class="left-content">
                
                <img src="../imagenes/Apps.jpg" alt="Imagen de solicitud" class="responsive-image">
            </div>
    
            <!-- Formulario en el lado derecho -->
            <div class="right-form">
                <form class="formulario">
                    <div class="texto-formulario">
                        <h2>Bienvenido de nuevo</h2>
                        <p>Inicia sesión con tu cuenta</p>
                    </div>
                    <div class="input">
                        <label for="usuario">Usuario</label>
                        <input placeholder="Ingresa tu nombre" type="text" id="usuario">
                    </div>
                    <div class="input">
                        <label for="email">Correo Electrónico</label>
                        <input placeholder="Ingresa tu Correo Electrónico" type="email" id="email">
                    </div>
                    <div class="input">
                        <label for="password">Contraseña</label>
                        <input placeholder="Ingresa tu contraseña" type="password" id="password">
                    </div>
                    <div class="input">
                        <label for="dispositivo">Dispositivo</label>
                        <select id="dispositivo" name="dispositivo" required>
                            <option value="" disabled selected>Selecciona tu Dispositivos</option>
                            <option value="portatil">Portátil</option>
                            <option value="consola">Consola</option>
                            <option value="computadora">Computadora</option>
                        </select>
                    </div>
    
                    <div class="input">
                        <label for="especificaciones">Especificaciones:</label>
                        <textarea id="especificaciones" name="especificaciones" rows="4" placeholder="Describe las especificaciones del dispositivo" required></textarea>
                    </div>
    
                    <div class="input">
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" id="telefono" name="telefono" placeholder="Número de teléfono" pattern="[0-9]{10}" required>
                    </div>
    
                    <div class="input">
                        <label for="ciudad">Ciudad:</label>
                        <select id="ciudad" name="ciudad" required>
                            <option value="" disabled selected>Selecciona tu ciudad</option>
                        </select>
                    </div>
                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                    <script src="https://www.google.com/recaptcha/api.js?render=6LfUdNwqAAAAAF8uMHVJOKBu52oF--2BWsoseH38"></script>
                    <script>
                        grecaptcha.ready(function() {
                            grecaptcha.execute('6LfUdNwqAAAAAF8uMHVJOKBu52oF--2BWsoseH38', { action: 'submit' }).then(function(token) {
                                document.getElementById('g-recaptcha-response').value = token;
                            });
                        });
                    </script>
                    
                    <div class="input">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    
      <script>
        // lista ciudades
        const listciudad = [
            "Bogotá", "Medellín", "Cali", "Barranquilla", "Cartagena",
            "Cúcuta", "Bucaramanga", "Pereira", "Santa Marta", "Ibagué",
            "Manizales", "Villavicencio", "Pasto", "Montería", "Neiva",
            "Armenia", "Popayán", "Sincelejo", "Tunja", "Riohacha"
        ];

        const seleccionciudad = document.getElementById('ciudad');


        listciudad .forEach(ciudad => {
        const option = document.createElement('option');
            option.value = ciudad;
            option.textContent = ciudad;
            seleccionciudad.appendChild(option);
        });
        
       
      </script>
      <script>
        document.querySelector(".formulario").addEventListener("submit", function(event) {
            event.preventDefault(); // Evitar recarga de la página
        
            let usuario = document.getElementById("usuario").value;
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;
            let dispositivo = document.getElementById("dispositivo").value;
            let especificaciones = document.getElementById("especificaciones").value;
            let telefono = document.getElementById("telefono").value;
            let ciudad = document.getElementById("ciudad").value;
        
            let datos = {
                usuario: usuario,
                email: email,
                password: password,
                dispositivo: dispositivo,
                especificaciones: especificaciones,
                telefono: telefono,
                ciudad: ciudad
            };
        
            fetch("../api/solicitud.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(datos)
            })
            .then(response => response.json())
            .then(data => {
                if (data.message) {
                    alert(data.message);
                    document.querySelector(".formulario").reset();
                } else {
                    alert("Error: " + data.error);
                }
            })
            .catch(error => console.error("Error:", error));
        });
        </script>          
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