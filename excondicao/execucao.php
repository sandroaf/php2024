<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado</h2>
    <?php 
    function parimpar($num) {
        if (($num % 2) > 0) {
            return "ímpar";
        } else {
            return "par";
        }
    }
    function tabuada($num) {
        for($i=0;$i<=10;$i++) {
            echo "$num x $i = ".($num * $i);
            echo "<br>";
        }
    }
    if ($_POST["sopcao"] == "par") {
        echo $_POST["inumero"]." é ".parimpar($_POST["inumero"]);
    } elseif ($_POST["sopcao"] == "tabuada") {
        tabuada($_POST["inumero"]);
    } else {
        echo "<strong>ERRO</strong> Opção inválida";
    }
    ?>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>