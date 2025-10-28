<?php
$servidor = "localhost";
$username = "root";
$senha = "";
$database = "jogo_corporativo";

$conn = new mysqli($servidor, $username, $senha, $database);

if ($conn->connect_error) {
    die("Erro na conexão");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pergunta = $_POST["pergunta"];
    $tipo = $_POST["tipo"];
    $respostas = $_POST["respostas"];

    $sql = "INSERT INTO Perguntas (pergunta, tipo, respostas) VALUES ('$pergunta', '$tipo', '$respostas')";

    $resultado = $conn->query($sql);

    if ($resultado == true) {
        echo "Pergunta cadastrada com sucesso.";
    } else {
        echo "Erro ao cadastrar.";
    }
}
?>
