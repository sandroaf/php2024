<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo readfile</title>
</head>
<body>
    <h2>Exemplo readfile</h2>
    <?php
       echo "<pre>";
       readfile('arquivos.txt');
       echo "</pre>"; 
       echo "<br><br>";
       readfile('textos.txt');
    ?>
    <br>
    <?php include_once("menu.php") ?>
</body>
</html>