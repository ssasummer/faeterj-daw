<?php
$servidor = "localhost";
$username = "root";
$senha = "";
$database = "faeterj3dawmanha";

$conn = new mysqli($servidor, $username, $senha, $database);

if ($conn->connect_error) {
    die("Erro na conexão");
}

$id = $_GET["id"];

$sql = "SELECT * FROM Perguntas WHERE id = $id";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    echo json_encode($resultado->fetch_assoc());
} else {
    echo json_encode(["encontrado" => false]);
}
?>
