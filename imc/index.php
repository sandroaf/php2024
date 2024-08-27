<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .abaixo {
            background-color: blue;
        }
        .nomal {
            background-color:green;
        }
        .preobeso {
            background-color:coral;
        }
        .obeso1 {
            background-color:orange;
        }
        .obeso2 {
            background-color:orangered;
        }
        .obeso3 {
            background-color:red;
        }

    </style>
    <title>Cálculo do IMC</title>
</head>
<body>
    <h1>Cálculo do IMC</h1>
    <form action="#" method="POST">
        <label for="inome">Nome:</label>
        <input name="inome" id="inome" size="30">
        <br>
        <label for="iidade">Idade:</label>
        <input name="iidade" id="iidade" size="2">
        <br>
        <label for="ialtura">Altura:</label>
        <input name="ialtura" id="ialtura" size="3"><small>(em m)</small>
        <br>
        <label for="ipeso">Peso:</label>
        <input name="ipeso" id="ipeso" size="5"><small>(em kg)</small>
        <br>
        <br>
        <button name="bcacular">Calcular IMC</button>
    </form>
    <?php
    require_once "imc.php";
    if ($_POST) {
        $imc = imc($_POST["ialtura"],$_POST["ipeso"]);
        echo $_POST["inome"]." seu IMC é ".$imc;
        echo "<br>";
        if ($imc < 18.5) { 
            echo "<span class='abaixo'>Abaixo do peso</span>";
        } elseif ($imc >= 18.5 && $imc < 25) {
            echo "<span class='nomal'>Peso normal</span>";
        } elseif ($imc >= 25 && $imc < 30) {
            echo "<span class='preobeso'>Pré-obsidade</span>";
        } elseif ($imc >= 30 && $imc < 35) {
            echo "<span class='obeso1'>Obesidade Grau 1</span>";
        } elseif ($imc >= 35 && $imc < 40) {
            echo "<span class='obeso2'>Obesidade Grau 2</span>";
        } else {
            echo "<span class='obeso3'>Obesidade Grau 3</span>";
        }
    }
    ?>
</body>
</html>