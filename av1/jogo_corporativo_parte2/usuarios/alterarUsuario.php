<?php
header('Content-Type: application/json');

$caminho = "usuarios.json";
$dados = json_decode(file_get_contents("php://input"), true);
$id = intval($dados["id"]);
$usuario = $dados["usuario"];

$usuarios = json_decode(file_get_contents($caminho), true);
$usuarios[$id] = $usuario;

file_put_contents($caminho, json_encode($usuarios, JSON_PRETTY_PRINT));

echo json_encode(["mensagem" => "Usuário alterado com sucesso!"]);
?>
