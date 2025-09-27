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
        echo "<a href='usuarios/cadastrarUsuario.php'><h5>Cadastrar Usuário</h5></a>";
        echo "<a href='usuarios/listarUsuarios.php'><h5>Listar Usuários</h5></a>";
    ?>

    <h2>Perguntas</h2>
    <?php
        echo "<a href='perguntas/cadastrarPergunta.php'><h5>Cadastrar Pergunta</h5></a>";
        echo "<a href='perguntas/listarPerguntas.php'><h5>Listar Perguntas</h5></a>";
    ?>
</body>
</html>
