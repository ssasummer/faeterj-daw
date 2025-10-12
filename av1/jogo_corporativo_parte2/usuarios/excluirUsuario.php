<?php
header('Content-Type: application/json');

$caminho = "usuarios.json";
$dados = json_decode(file_get_contents("php://input"), true);
$id = intval($dados["id"]);

$usuarios = json_decode(file_get_contents($caminho), true);
array_splice($usuarios, $id, 1);

file_put_contents($caminho, json_encode($usuarios, JSON_PRETTY_PRINT));

echo json_encode(["mensagem" => "Usuário excluído com sucesso!"]);
?>
