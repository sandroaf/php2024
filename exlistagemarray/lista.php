<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem dos dados</title>
</head>
<body>
    <h2>Listagem dos dados</h2>
    <?php
       session_start();
       if (isset($_SESSION["nomes"]) && isset($_SESSION["idades"])) {
          for ($i = 0;$i < count($_SESSION["nomes"]);$i++) {
              echo "Item: $i - Nome: ".$_SESSION['nomes'][$i]." - Idade: ".$_SESSION['idades'][$i]."<br>";
          }
       }
    ?>
    <br>
    <?php
        require_once("form.php");
    ?>
    
</body>
</html>