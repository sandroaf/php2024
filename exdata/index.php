<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datas</title>
</head>
<body>
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        $agora = new DateTime(); 
        print_r($agora);

        echo "<br>";
        echo $agora->format("d/m/Y");
    ?>
</body>
</html>