<?php
include '../api/conexion.php';

$correo = $_POST['correo'];

// Buscar el correo en la base de datos
$query = "SELECT * FROM usuarios WHERE correo='$correo'";
$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    // Existe: genera token y continúa
    $token = bin2hex(random_bytes(16));
    $expira = date("Y-m-d H:i:s", strtotime("+1 hour"));

    $update = "UPDATE usuarios SET reset_token='$token', token_expira='$expira' WHERE correo='$correo'";
    $conexion->query($update);

    // Muestra o envía el enlace de restablecimiento
    
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso</title>
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
    <section class="cuerpo_container container">
        <?php
        echo "<a href='restablecer.php?token=$token' class='Registro'>¡Aqui!</a>";
        ?>
        
    </section>
</body>
</html>
<?php
} else {
    // No existe: redirige a iniciar sesion
    header("Location: ../paginas/Registro.php?error=correo");
    exit;
}
?>



