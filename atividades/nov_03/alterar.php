<?php include 'db.php'; $mat=$_GET['matricula']; $dados=$conn->query("SELECT * FROM alunos WHERE matricula='$mat'")->fetch_assoc(); if(isset($_POST['nome'])){ $conn->query("UPDATE alunos SET nome='{$_POST['nome']}', email='{$_POST['email']}' WHERE matricula='$mat'"); header("Location: index.php"); } ?>
<!DOCTYPE html>
<html>
  <head>  
    <title>Editar Aluno</title>
  </head>
  <body>
    <h2>Editar Aluno</h2>
    <form method="POST">
      Nome: <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" required><br>
      Email: <input type="email" name="email" value="<?php echo $dados['email']; ?>" required><br>
    <button type="submit">Salvar</button>
    </form>
  </body>
</html>
