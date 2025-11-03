<?php include 'db.php'; if(isset($_POST['nome'])){ $nome=$_POST['nome']; $matricula=$_POST['matricula']; $email=$_POST['email']; $conn->query("INSERT INTO alunos VALUES('$matricula','$nome','$email')"); header("Location: index.php"); } ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Adicionar Aluno</title>
  </head>
  <body>
    <h2>Adicionar Aluno</h2>
    <form method="POST">
      Matrícula: <input type="text" name="matricula" required><br>
      Nome: <input type="text" name="nome" required><br>
      Email: <input type="email" name="email" required><br>
      <button type="submit">Salvar</button>
    </form>
  </body>
</html>
