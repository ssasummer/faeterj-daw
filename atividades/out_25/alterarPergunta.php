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
$pergunta = $_POST["pergunta"];
$tipo = $_POST["tipo"];
$assunto = $_POST["assunto"];

$sql = "UPDATE Perguntas SET pergunta='$pergunta', tipo=$tipo, assunto='$assunto' WHERE id=$id";
$resultado = $conn->query($sql);

if ($resultado == true) {
    echo json_encode("OK");
} else {
    echo json_encode("ERRO");
}
?>
