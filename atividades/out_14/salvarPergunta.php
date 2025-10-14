<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Apenas POST permitido']);
    exit;
}

$id = isset($_POST['id']) ? trim($_POST['id']) : '';
$pergunta = isset($_POST['pergunta']) ? trim($_POST['pergunta']) : '';
$resposta = isset($_POST['resposta']) ? trim($_POST['resposta']) : '';

if ($id === '' || $pergunta === '' || $resposta === '') {
    echo json_encode(['success' => false, 'message' => 'Campos obrigatorios ausentes']);
    exit;
}

$dir = __DIR__;
$file = $dir . '/perguntas.txt';
$tmp = $dir . '/perguntas_tmp.txt';

if (!is_readable($file)) {
    echo json_encode(['success' => false, 'message' => 'Arquivo não encontrado']);
    exit;
}

$in = fopen($file, 'r');
$out = fopen($tmp, 'w');
if (!$in || !$out) {
    echo json_encode(['success' => false, 'message' => 'Erro']);
    exit;
}

if (!flock($in, LOCK_SH)) { }
if (!flock($out, LOCK_EX)) { }

$found = false;
while (($line = fgets($in)) !== false) {
    $lineTrim = trim($line);
    if ($lineTrim === '') {
        fwrite($out, PHP_EOL);
        continue;
    }
    $parts = explode(';', $lineTrim);
    if (count($parts) < 1) {
        fwrite($out, $line);
        continue;
    }
    $lineId = trim($parts[0]);
    if ($lineId === $id) {
        $novaLinha = $id . ';' . str_replace(["\r", "\n", ";"], ['','','-'], $pergunta) . ';' . str_replace(["\r", "\n", ";"], ['','','-'], $resposta) . PHP_EOL;
        fwrite($out, $novaLinha);
        $found = true;
    } else {
        fwrite($out, $line);
    }
}

fflush($out);
flock($in, LOCK_UN);
flock($out, LOCK_UN);
fclose($in);
fclose($out);

if (!$found) {
    @unlink($tmp);
    echo json_encode(['success' => false, 'message' => 'ID não encontrado']);
    exit;
}

if (!rename($tmp, $file)) {
    echo json_encode(['success' => false, 'message' => 'Erro']);
    exit;
}

echo json_encode(['success' => true]);
