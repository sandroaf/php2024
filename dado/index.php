<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dado</title>
</head>
<body>
    <form action="#" method="POST">
        <button name="jogardado" type="submit">Jogar Dado</button>
    </form>
    <br>
    <?php
       session_start();
       if (isset($_SESSION["ultimo_dado"])) {
            echo "<br>";
            echo "<h3>Último sorteio</h3>";
            echo "<img width='64px' src='img/dado".$_SESSION["ultimo_dado"].".jpg'>";
        }
       if (isset($_POST["jogardado"])) {
           echo "<br>";
           echo "<h3>Sorteio atual</h3>";
           $dado = rand(1,6);
           $_SESSION["ultimo_dado"] = $dado;
           echo "<img width='64px' src='img/dado$dado.jpg'>";
       } 
    ?>
</body>
</html>