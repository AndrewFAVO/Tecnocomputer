<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

$servername = "localhost:3307";
$username = "root"; // Usuario por defecto de XAMPP
$password = "haider1028"; // Sin contraseña por defecto
$dbname = "base_tencocomputer";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die(json_encode(["error" => "Conexión fallida: " . $conn->connect_error]));
}

// Obtener datos del formulario
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['usuario']) && isset($data['email']) && isset($data['password']) && isset($data['dispositivo']) &&
    isset($data['especificaciones']) && isset($data['telefono']) && isset($data['ciudad'])) {

    // Encriptar contraseña
    $password_hash = password_hash($data['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO solicitudes (usuario, email, password, dispositivo, especificaciones, telefono, ciudad) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $data['usuario'], $data['email'], $password_hash, $data['dispositivo'], $data['especificaciones'], $data['telefono'], $data['ciudad']);

    if ($stmt->execute()) {
        echo json_encode(["message" => "Solicitud enviada con éxito"]);
    } else {
        echo json_encode(["error" => "Error al enviar la solicitud"]);
    }

    $stmt->close();
} else {
    echo json_encode(["error" => "Datos incompletos"]);
}

$conn->close();
?>
