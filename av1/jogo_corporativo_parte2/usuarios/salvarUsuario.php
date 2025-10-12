<?php
header('Content-Type: application/json');

$caminhoArquivo = "usuarios.json";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dados = json_decode(file_get_contents("php://input"), true);
    $usuarios = [];

    if (file_exists($caminhoArquivo)) {
        $usuarios = json_decode(file_get_contents($caminhoArquivo), true);
    }

    $usuarios[] = $dados;

    file_put_contents($caminhoArquivo, json_encode($usuarios, JSON_PRETTY_PRINT));

    echo json_encode(["mensagem" => "Usuario cadastrado!"]);
}
?>
