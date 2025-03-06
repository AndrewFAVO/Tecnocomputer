<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Content-Type: application/json");

$servername = "localhost:3307"; // Asegúrate de que este puerto es el correcto
$username = "root";
$password = "haider1028";
$dbname = "base_tencocomputer";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die(json_encode(["error" => "Conexión fallida: " . $conn->connect_error]));
}

$request_method = $_SERVER["REQUEST_METHOD"];

switch ($request_method) {
    case "GET":
        $sql = "SELECT * FROM solicitudes";
        $result = $conn->query($sql);

        $solicitudes = [];
        while ($row = $result->fetch_assoc()) {
            $solicitudes[] = $row;
        }

        echo json_encode($solicitudes);
        break;

    case "POST":
        $data = json_decode(file_get_contents("php://input"), true);

        if (isset($data['usuario']) && isset($data['email']) && isset($data['password']) &&
            isset($data['dispositivo']) && isset($data['especificaciones']) &&
            isset($data['telefono']) && isset($data['ciudad'])) {

            $password_hash = password_hash($data['password'], PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO solicitudes (usuario, email, password, dispositivo, especificaciones, telefono, ciudad) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $data['usuario'], $data['email'], $password_hash, $data['dispositivo'], 
                              $data['especificaciones'], $data['telefono'], $data['ciudad']);

            if ($stmt->execute()) {
                echo json_encode(["message" => "Solicitud enviada con éxito"]);
            } else {
                echo json_encode(["error" => "Error al enviar la solicitud"]);
            }

            $stmt->close();
        } else {
            echo json_encode(["error" => "Datos incompletos"]);
        }
        break;

    case "PUT":
        $data = json_decode(file_get_contents("php://input"), true);

        if (isset($data["id"]) && isset($data["usuario"]) && isset($data["email"])) {
            $stmt = $conn->prepare("UPDATE solicitudes SET usuario=?, email=? WHERE id=?");
            $stmt->bind_param("ssi", $data["usuario"], $data["email"], $data["id"]);

            if ($stmt->execute()) {
                echo json_encode(["message" => "Solicitud actualizada correctamente"]);
            } else {
                echo json_encode(["error" => "Error al actualizar"]);
            }

            $stmt->close();
        } else {
            echo json_encode(["error" => "Datos incompletos"]);
        }
        break;

    case "DELETE":
        $data = json_decode(file_get_contents("php://input"), true);

        if (isset($data["id"])) {
            $stmt = $conn->prepare("DELETE FROM solicitudes WHERE id=?");
            $stmt->bind_param("i", $data["id"]);

            if ($stmt->execute()) {
                echo json_encode(["message" => "Solicitud eliminada correctamente"]);
            } else {
                echo json_encode(["error" => "Error al eliminar"]);
            }

            $stmt->close();
        } else {
            echo json_encode(["error" => "ID no especificado"]);
        }
        break;

    default:
        echo json_encode(["error" => "Método no permitido"]);
        break;
}

$conn->close();
?>
