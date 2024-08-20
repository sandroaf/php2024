<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebendo dados de Formulário</title>
</head>
<body>
    <h2>Dados recebidos</h2>
    <?php 
        if (($_GET["inome"] != "") and ($_GET["icidade"] != "")) {
            echo "Olá <strong>".$_GET["inome"]."</strong> de ".$_GET["icidade"];
        } else {
            echo "Não foram recebidos os dados";
        }
    ?>
    <br><br>
    <a href="index.php">Voltar</a>
</body>
</html>