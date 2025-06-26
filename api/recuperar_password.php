<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $query = "SELECT * FROM usuarios WHERE correo='$correo'";
    $result = mysqli_query($conexion, $query);

    if (mysqli_num_rows($result) > 0) {
        // Crear token único
        $token = bin2hex(random_bytes(50));
        $expira = date("Y-m-d H:i:s", strtotime("+1 hour"));

        // Guardar token en tabla
        mysqli_query($conexion, "UPDATE usuarios SET token='$token', expiracion_token='$expira' WHERE correo='$correo'");

        $enlace = "http://tudominio.com/paginas/restablecer_password.php?token=$token";
        $asunto = "Recuperación de contraseña";
        $mensaje = "Haz clic en este enlace para restablecer tu contraseña:\n$enlace";

        mail($correo, $asunto, $mensaje);

        echo "Revisa tu correo para restablecer la contraseña.";
    } else {
        echo "Correo no registrado.";
    }
}
?>
