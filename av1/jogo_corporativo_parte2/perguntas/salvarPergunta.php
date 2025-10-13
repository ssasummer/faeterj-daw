<?php
header('Content-Type: application/json');

$caminho = "perguntas.json";
$dados = json_decode(file_get_contents("php://input"), true);

$pergunta = [
    "pergunta" => $dados["pergunta"],
    "tipo" => $dados["tipo"],
    "respostas" => $dados["respostas"]
];

$lista = json_decode(file_get_contents($caminho), true);
$lista[] = $pergunta;

file_put_contents($caminho, json_encode($lista, JSON_PRETTY_PRINT));

echo json_encode(["mensagem" => "Pergunta cadastrada."]);
?>
