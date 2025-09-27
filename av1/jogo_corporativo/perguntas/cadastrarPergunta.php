<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pergunta</title>
    <link rel = "stylesheet" href = "../style.css">
</head>
<body>
        <div>
            <h1>Cadastrar Pergunta</h1>
            <form method="post" action="">
                Texto da Pergunta: <input type="text" name="pergunta"><br><br>
                Tipo:
                <select name="tipo">
                    <option value="multipla">Multipla Escolha</option>
                    <option value="texto">Resposta em Texto</option>
                </select><br><br>
                Respostas (use | para multipla escolha):<br>
                <textarea name="respostas"></textarea><br><br>
                <input type="submit" value="Cadastrar">
            </form>
        
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $pergunta = $_POST["pergunta"];
                $tipo = $_POST["tipo"];
                $respostas = $_POST["respostas"];
        
                $linha = $pergunta . ";" . $tipo . ";" . $respostas . "\n";
                file_put_contents("../perguntas.txt", $linha, FILE_APPEND);
        
                echo "<p>Pergunta cadastrada. </p>";
            }
            ?>
            <p><a href="../index.php">inicio</a></p>
        </div>
</body>
</html>
