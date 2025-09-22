<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Pergunta</title>
</head>
<body>
    <h1>Detalhes da Pergunta</h1>

    <?php
    $id = $_GET["id"];
    $perguntas = file("../perguntas.txt");
    $dados = explode(";", trim($perguntas[$id]));

    echo "<p><b>Pergunta:</b> $dados[0]</p>";
    echo "<p><b>Tipo:</b> $dados[1]</p>";
    echo "<p><b>Respostas:</b> $dados[2]</p>";
    ?>
    <p><a href="../index.php">inicio</a></p>
</body>
</html>
