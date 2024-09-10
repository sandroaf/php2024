<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo fopen e fread</title>
</head>
<body>
    <h2>Exemplo fopen e fread</h2>
    <?php
       $nomearquivo = 'arquivos.txt';
       echo "$nomearquivo tem ".filesize($nomearquivo)." bytes";
       $file = fopen($nomearquivo,"r");
       $conteudo = fread($file, filesize($nomearquivo));
       echo "<pre>$conteudo</pre>";
       fclose($file);
    ?>
    <br>
    <?php include_once("menu.php") ?>
</body>
</html>