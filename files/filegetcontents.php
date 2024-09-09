<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo fopen e fread</title>
</head>
<body>
    <?php
       $file = file_get_contents('arquivos.txt');
       echo $file;
    ?>
    <br>
    <?php include_once("menu.php") ?>
</body>
</html>