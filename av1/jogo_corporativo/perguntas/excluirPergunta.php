<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Pergunta</title>
    <link rel = "stylesheet" href = "../style.css">
</head>
<body>
    <div>
        <h1>Excluir Pergunta</h1>
        <?php
            $id = $_GET["id"];
            $perguntas = file("../perguntas.txt");
            unset($perguntas[$id]);
            file_put_contents("../perguntas.txt", implode("", $perguntas));
            echo "<p>Pergunta excluida. </p>";
        ?>
        <p><a href="../index.php">inicio</a></p>
    </div>
</body>
</html>
