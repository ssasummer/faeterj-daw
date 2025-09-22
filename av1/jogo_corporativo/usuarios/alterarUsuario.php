<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Usuario</title>
</head>
<body>
    <h1>Alterar Usuario</h1>

    <?php
    $id = $_GET["id"];
    $usuarios = file("../usuarios.txt");
    $dados = explode(";", trim($usuarios[$id]));
    ?>

    <form method="post" action="">
        Nome: <input type="text" name="nome" value="<?php echo $dados[0]; ?>"><br><br>
        Email: <input type="email" name="email" value="<?php echo $dados[1]; ?>"><br><br>
        Senha: <input type="password" name="senha" value="<?php echo $dados[2]; ?>"><br><br>
        <input type="submit" value="Salvar Alterações">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuarios[$id] = $_POST["nome"] . ";" . $_POST["email"] . ";" . $_POST["senha"] . "\n";
        file_put_contents("../usuarios.txt", implode("", $usuarios));
        echo "<p>Usuario alterado com sucesso!</p>";
    }
    ?>
    <p><a href="../index.php">inicio</a></p>
</body>
</html>
