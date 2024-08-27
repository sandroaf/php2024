<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de uso do Include</title>
</head>
<body>
    <?php 
       error_reporting(0); //não exibir warmmings do PHP
       echo "A $cor $fruta<br>";
       include "vars.php";
       echo "A $cor $fruta<br>";
    ?>
</body>
</html>