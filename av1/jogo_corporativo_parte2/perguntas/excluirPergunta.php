<?php
header('Content-Type: application/json');

$caminho = "perguntas.json";
$dados = json_decode(file_get_contents("php://input"), true);
$id = intval($dados["id"]);

$lista = json_decode(file_get_contents($caminho), true);
array_splice($lista, $id, 1);

file_put_contents($caminho, json_encode($lista, JSON_PRETTY_PRINT));

echo json_encode(["mensagem" => "Pergunta excluída com sucesso!"]);
?>
