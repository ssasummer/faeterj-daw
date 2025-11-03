<?php
$servidor = "localhost";
$username = "root";
$senha = "";
$database = "crud_alunos";
$conn = new mysqli($servidor, $username, $senha, $database);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
