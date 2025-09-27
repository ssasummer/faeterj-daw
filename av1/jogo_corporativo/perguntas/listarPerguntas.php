<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Perguntas</title>
    <link rel = "stylesheet" href = "../style.css">
</head>
<body>
    <div>
        <h1>Lista de Perguntas</h1>
        <?php
            if (file_exists("../perguntas.txt")) {
                $perguntas = file("../perguntas.txt");
                echo "<ul>";
                foreach ($perguntas as $index => $linha) {
                    $dados = explode(";", trim($linha));
                    echo "<li>Pergunta: $dados[0] | Tipo: $dados[1] 
                          [<a href='listarUmaPergunta.php?id=$index'>Ver</a>] 
                          [<a href='alterarPergunta.php?id=$index'>Alterar</a>] 
                          [<a href='excluirPergunta.php?id=$index'>Excluir</a>]</li>";
                }
                echo "</ul>";
            } 
            else {
            echo "<p>Nenhuma pergunta cadastrada.</p>";
            }
        ?>
        <p><a href="../index.php">inicio</a></p>
    </div>
</body>
</html>
