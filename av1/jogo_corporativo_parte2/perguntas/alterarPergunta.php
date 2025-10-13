<?php
header('Content-Type: application/json');

$caminho = "perguntas.json";
$dados = json_decode(file_get_contents("php://input"), true);
$id = intval($dados["id"]);

$lista = json_decode(file_get_contents($caminho), true);

$lista[$id]["pergunta"] = $dados["pergunta"];
$lista[$id]["tipo"] = $dados["tipo"];
$lista[$id]["respostas"] = $dados["respostas"];

file_put_contents($caminho, json_encode($lista, JSON_PRETTY_PRINT));

echo json_encode(["mensagem" => "Pergunta alterada."]);
?>
