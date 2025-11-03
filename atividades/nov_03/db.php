<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "crud_alunos";
    $conn = new myconsultai($servidor, $usuario, $senha, $database);
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }
?>
