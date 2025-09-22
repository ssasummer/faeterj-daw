<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jogo Corporativo - Sistema de Perguntas</title>
</head>
<body>
    <h1>Jogo Corporativo</h1>
    <p>Bem-vindo ao sistema de perguntas e respostas!</p>

    <h2>Usuários</h2>
    <?php
        echo "<a href='usuarios/cadastrarUsuario.php'>Cadastrar Usuário</a><br>";
        echo "<a href='usuarios/listarUsuarios.php'>Listar Usuários</a><br>";
    ?>

    <h2>Perguntas</h2>
    <?php
        echo "<a href='perguntas/cadastrarPergunta.php'>Cadastrar Pergunta</a><br>";
        echo "<a href='perguntas/listarPerguntas.php'>Listar Perguntas</a><br>";
    ?>
</body>
</html>
