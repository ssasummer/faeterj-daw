<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuario</title>
</head>
<body>
    <h1>Cadastrar Usuario</h1>

    <form method="post" action="">
        Nome: <input type="text" name="nome"><br><br>
        Email: <input type="email" name="email"><br><br>
        Senha: <input type="password" name="senha"><br><br>
        <input type="submit" value="Cadastrar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $linha = $nome . ";" . $email . ";" . $senha . "\n";
        file_put_contents("../usuarios.txt", $linha, FILE_APPEND);

        echo "<p>Usuario cadastrado com sucesso!</p>";
    }
    ?>
    <p><a href="../index.php"> inicio </a></p>
</body>
</html>
