<?php
$dados = json_decode(file_get_contents("php://input"), true);

$pergunta = $dados["pergunta"];
$tipo = $dados["tipo"];
$respostas = $dados["respostas"];

$registro = ["pergunta" => $pergunta, "tipo" => $tipo, "respostas" => $respostas];

$arquivo = "../perguntas.json";

if (file_exists($arquivo)) {
    $conteudo = json_decode(file_get_contents($arquivo), true);
} else {
    $conteudo = [];
}

$conteudo[] = $registro;

file_put_contents($arquivo, json_encode($conteudo, JSON_PRETTY_PRINT));

echo "Pergunta cadastrada com sucesso.";

