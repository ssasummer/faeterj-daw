<?php include 'db.php'; $mat=$_GET['matricula']; $dados=$conn->query("SELECT * FROM alunos WHERE matricula='$mat'")->fetch_assoc(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ver Aluno</title>
  </head>
  <body>
    <h2>Detalhes do Aluno</h2>
    Matrícula: <?php echo $dados['matricula']; ?><br>
    Nome: <?php echo $dados['nome']; ?><br>
    Email: <?php echo $dados['email']; ?><br><br>
    <a href="index.php">Voltar</a>
  </body>
</html>

