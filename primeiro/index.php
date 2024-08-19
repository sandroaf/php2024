<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá mundo PHP</title>
</head>
<body>
    <p>Esse exemplo trás um primeiro código interpretando HTML + PHP</p>
    <!-- Início código PHP -->
    <?php 
       echo "<h1>Olá mundo do server-side script com PHP</h1>";
       echo "<br>";
       date_default_timezone_set("America/Sao_Paulo");
       echo "Data e hora da execução: ".date("H:i:s d/m/Y");
    ?>
    <!-- termino do código PHP --> 
    <br>
    <script language="JavaScript">
        document.write(new Date());
    </script> 
</body>
</html>