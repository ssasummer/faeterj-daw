<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Pergunta</title>
</head>
<body>
    <h1>Alterar Pergunta</h1>

    <?php
    $id = $_GET["id"];
    $perguntas = file("../perguntas.txt");
    $dados = explode(";", trim($perguntas[$id]));
    ?>

    <form method="post" action="">
        Pergunta: <input type="text" name="pergunta" value="<?php echo $dados[0]; ?>"><br><br>
        Tipo:
        <select name="tipo">
            <option value="multipla" <?php if($dados[1]=="multipla") echo "selected"; ?>>Multipla Escolha</option>
            <option value="texto" <?php if($dados[1]=="texto") echo "selected"; ?>>Resposta em Texto</option>
        </select><br><br>
        Respostas:<br>
        <textarea name="respostas"><?php echo $dados[2]; ?></textarea><br><br>
        <input type="submit" value="Salvar Alterações">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $perguntas[$id] = $_POST["pergunta"] . ";" . $_POST["tipo"] . ";" . $_POST["respostas"] . "\n";
        file_put_contents("../perguntas.txt", implode("", $perguntas));
        echo "<p>Pergunta alterada.</p>";
    }
    ?>
    <p><a href="../index.php">inicio</a></p>
</body>
</html>
