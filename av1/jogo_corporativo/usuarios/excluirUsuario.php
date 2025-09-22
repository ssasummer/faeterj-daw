<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuario</title>
</head>
<body>
    <h1>Excluir Usuario</h1>

    <?php
    $id = $_GET["id"];
    $usuarios = file("../usuarios.txt");
    unset($usuarios[$id]);
    file_put_contents("../usuarios.txt", implode("", $usuarios));
    echo "<p>Usuario excluído!</p>";
    ?>
    <p><a href="../index.php">inicio</a></p>
</body>
</html>
