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
       echo "<pre>";
       var_dump($_SESSION);
       echo "</pre>";
       if (isset($_SESSION["dados"])) {
          for ($i = 0;$i < count($_SESSION["dados"]);$i++) {
              echo "Item: $i - Nome: ".$_SESSION['dados'][$i][0]." - Idade: ".$_SESSION['dados'][$i][1]."<br>";
          }
       }
    ?>
    <br>
    <?php
        require_once("form.php");
    ?>
    
</body>
</html>