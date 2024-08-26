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
       if (isset($_POST["jogardado "])) {
           $dado = rand(1,6);
           echo "<img src='img/dado$dado.jpg'>";
       }
    ?>
</body>
</html>