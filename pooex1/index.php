<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo POO</title>
</head>
<body>
    <?php 
    require_once('fruit.php');
    
    $maca = new fruit('Maçã', 'Vermelha');

    echo $maca->dados();
    echo "<br>";

    $abacaxi = new fruit('Abacaxi', 'Amarelo');

    echo $abacaxi->dados();


    ?>
</body>
</html>