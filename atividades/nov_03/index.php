<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
  <head>  
    <title>Listar Alunos</title>
  </head>
<body>
  <h2>Lista de Alunos</h2>
  <a href="incluir.php">Adicionar Aluno</a><br><br>
  <table border="1" cellpadding="8">
    <tr>
      <th>Matrícula</th><th>Nome</th><th>Email</th><th>Ações</th>
    </tr>
  <?php
    $consulta = "SELECT * FROM alunos";
    $resultado = $conn->query($consulta);
    while($linha = $resultado->fetch_assoc()){ echo "<tr>
      <td>{$linha['matricula']}</td>
      <td>{$linha['nome']}</td>
      <td>{$linha['email']}</td>
      <td><a href='ver.php?matricula={$linha['matricula']}'>Ver</a> | <a href='alterar.php?matricula={$linha['matricula']}'>Editar</a> | <a href='excluir.php?matricula={$linha['matricula']}'>Excluir</a></td>
    </tr>";} 
  ?>
  </table>
</body>
</html>
