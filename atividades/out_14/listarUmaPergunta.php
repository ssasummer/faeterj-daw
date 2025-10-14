<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    echo json_encode(['error' => 'Apenas GET permitido']);
    exit;
}

if (!isset($_GET['id'])) {
    echo json_encode(['error' => 'ID não informado']);
    exit;
}

$id = trim($_GET['id']);
$file = __DIR__ . '/perguntas.txt';

if (!is_readable($file)) {
    echo json_encode(['error' => 'Arquivo não encontrado']);
    exit;
}

$handle = fopen($file, 'r');
if (!$handle) {
    echo json_encode(['error' => 'Erro']);
    exit;
}

$found = false;
while (($line = fgets($handle)) !== false) {
    $line = trim($line);
    if ($line === '') continue; 
    $parts = explode(';', $line);
    if (count($parts) < 3) continue;
    $lineId = trim($parts[0]);
    if ($lineId === $id) {
        $pergunta = $parts[1];
        $resposta = $parts[2];
        $found = true;
        break;
    }
}
fclose($handle);

if (!$found) {
    echo json_encode(['error' => 'Pergunta não encontrada']);
    exit;
}

echo json_encode([
    'id' => $id,
    'pergunta' => $pergunta,
    'resposta' => $resposta
], JSON_UNESCAPED_UNICODE);
