<?php
$servidor = "localhost";
$username = "root";
$senha = "";
$database = "jogo_corporativo";

$conn = new mysqli($servidor, $username, $senha, $database);

if ($conn->connect_error) {
    die("Erro");
}

$id = $_POST["id"];

$sql = "DELETE FROM Perguntas WHERE id=$id";
$resultado = $conn->query($sql);

if ($resultado == true) {
    echo json_encode("Pergunta excluída");
} else {
    echo json_encode("Erro ao excluir");
}
?>
