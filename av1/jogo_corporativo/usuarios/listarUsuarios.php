<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuarios</title>
    <link rel = "stylesheet" href = "../style.css">
</head>
<body>
    <div id="diferenciadaDiv">
        <h1>Lista de Usuarios</h1>
        <?php
            $arquivo = "../usuarios.txt";
        
            if (file_exists($arquivo) && filesize($arquivo) > 0) {
                $usuarios = file($arquivo);
                echo "<ul>";
                foreach ($usuarios as $index => $usuario) {
                    $dados = explode(";", trim($usuario));
                    echo "<li>";
                    echo "Nome: $dados[0] | Email: $dados[1] ";
                    echo "[<a href='alterarUsuario.php?id=$index'>Alterar</a>] ";
                    echo "[<a href='excluirUsuario.php?id=$index'>Excluir</a>]";
                    echo "</li>";
                }
                echo "</ul>";
            } 
            else {
                echo "<p>Nenhum usuario cadastrado.</p>";
            }
        ?>
    
        <p><a href="cadastrarUsuario.php">Cadastrar novo usuario</a></p>
        <p><a href="../index.php"> inicio </a></p>
        </div>
</body>
</html>
