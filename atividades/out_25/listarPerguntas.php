<?php
$servidor = "localhost";
$username = "root";
$senha = "";
$database = "jogo_corporativo";

$conn = new mysqli($servidor, $username, $senha, $database);

if ($conn->connect_error) {
    die("Erro na conexão");
}

$sql = "SELECT * FROM Perguntas";
$resultado = $conn->query($sql);

$dados = [];

if ($resultado->num_rows > 0) {
    while($linha = $resultado->fetch_assoc()) {
        $dados[] = $linha;
    }
}

echo json_encode($dados);
?>
