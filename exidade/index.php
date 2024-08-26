<?php 
date_default_timezone_set("America/Sao_Paulo");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>
<body>
    <h1>Calcular Idade</h1>
    <form action="#" method="GET">
        <label for="inome">Nome:</label>
        <input type="text" name="inome" id="inome" placeholder="Informe seu nome">
        <br>
        <label for="idtnascto">Data de Nascimento</label>
        <input type="date" name="idtnascto" id="idtnascto" required>
        <br>
        <button type="submit">Calcular</button>
    </form>
    <?php 
        if (isset($_GET["idtnascto"])) {
            if ($_GET["idtnascto"] != "") {
                $dtnascto = new DateTime($_GET["idtnascto"]);
                //print_r($dtnascto);
                $intervalo = $dtnascto->diff(new DateTime());
                //print_r($intevalo);
                echo "Olá ".$_GET["inome"]." você tem ".$intervalo->format("%Y")." anos de idade";
            }
        }
    ?>
</body>
</html>