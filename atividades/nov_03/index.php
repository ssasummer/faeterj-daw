<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Listar Alunos</title>
  </head>
<body>
  <h2>Lista de Alunos</h2>
  <a href="create.php">Adicionar Aluno</a><br><br>
  <table border="1" cellpadding="8">
      <tr>
        <th>Matrícula</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
      </tr>
    <?php
      $sql = "SELECT * FROM alunos";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()){ echo "<tr>
        <td>{$row['matricula']}</td>
        <td>{$row['nome']}</td>
        <td>{$row['email']}</td>
        <td>
          <a href='view.php?matricula={$row['matricula']}'>Ver</a> | <a href='edit.php?matricula={$row['matricula']}'>Editar</a> | <a href='delete.php?matricula={$row['matricula']}'>Excluir</a></td>
      </tr>";} 
    ?>
  </table>
</body>
</html>
