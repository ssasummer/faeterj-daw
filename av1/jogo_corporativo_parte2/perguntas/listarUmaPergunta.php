<?php
header('Content-Type: application/json');
$id = intval($_GET["id"]);
$lista = json_decode(file_get_contents("perguntas.json"), true);
echo json_encode($lista[$id]);
?>
