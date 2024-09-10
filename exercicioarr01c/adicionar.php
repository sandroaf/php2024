<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px 3px;
        }
</style>
    <title>Adicionar - Nota</title>
</head>
<body>
    <?php 
       if (!isset($_SESSION['notas'])) {
            $_SESSION['notas'] = array();
       }
       if (isset($_POST['inome'] )) {
          if ($_POST['inome'] != '' && $_POST['inota'] != '') {
             $_SESSION['notas'][$_POST['inome']] = $_POST['inota'];
             echo "<h3>Nota ".$_POST['inota']." informada para ".$_POST['inome']."</h3>";
             echo "<br>";
             echo "Nro de alunos: ".count($_SESSION['notas']);
             echo "<br>";
             echo "<table >";
             echo "<tr><th>Nome</th><th>Nota</th></tr>";
             foreach ($_SESSION['notas'] as $nome => $nota) {
                echo "<tr><td>$nome</td><td>$nota</td></tr>";
             }
             echo "</table>";
          } else {
            echo "<h3>Erro ao adicionar. Nome ou nota em branco</h3>";
          }
       }
    ?>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>