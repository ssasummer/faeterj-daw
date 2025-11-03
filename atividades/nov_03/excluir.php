<?php include 'db.php'; $mat=$_GET['matricula']; $conn->query("DELETE FROM alunos WHERE matricula='$mat'"); header("Location: index.php"); ?>
