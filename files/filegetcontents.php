<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo file_get_contents</title>
</head>
<body>
    <h2>Exemplo file_get_contents</h2>
    <?php
       $file = file_get_contents('arquivos.txt');
       echo "<pre>$file</pre>";
    ?>
    <br>
    <?php include_once("menu.php") ?>
</body>
</html>