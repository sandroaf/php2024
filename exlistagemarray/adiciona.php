<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiciona Valor nos ARRAYs</title>
</head>
<body>
    <h2>Dados Cadastrados</h2>
    <?php 
       if (!isset($_SESSION["nomes"])) {
          $_SESSION["nomes"] = array();
       }
       if (!isset($_SESSION["idades"])) {
          $_SESSION["idades"] = array();
     }
     array_push($_SESSION["nomes"],$_POST["inome"]);
     array_push($_SESSION["idades"],$_POST["iidade"]);
     echo "Dados: ".$_POST["inome"]." - ".$_POST["iidade"]." foram cadastrados !";
    ?>
    <br>
    <br>
    <?php 
        require_once("form.php");
    ?>
</body>
</html>