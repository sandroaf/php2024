<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Array em Input</title>
</head>
<body>
    <form action="#" method="POST">
        <fieldset>
            <legend>Alunos</legend>
            <?php 
            for ($i = 1; $i <= $_GET['alunos']; $i++ ) {
            ?>  
                <?=$i?>: 
                <label>Nome: </label><input name="nome[]">
                <label>Nota: </label><input name="nota[]"><br>
            <?php   
            }
            ?>
            <button type="submit" name="bcalcular">Calcular</button>
        </fieldset>
    </form>
    <br>
    <?php
        function maioremedia($nome, $nota) {
            $retorno = array("nome" => "", "nota" => 0, "media" => 0);
            $soma =  0;
            for ($i=0;$i < count($nome); $i++) {
                if ($nota[$i] > $retorno["nota"]) {
                    $retorno["nome"] = $nome[$i];
                    $retorno["nota"] = $nota[$i];
                }
                $soma = $soma + $nota[$i];
            }
            $retorno["media"] = $soma / count($nota);
            return $retorno;
        }
        if (isset($_POST["bcalcular"])) {
            $maioremedia = maioremedia($_POST['nome'],$_POST['nota']);
            echo "Aluno com maior nota: ".$maioremedia["nome"]." - ".$maioremedia["nota"];
            echo "<br>";
            echo "Média das notas: ".$maioremedia["media"];
        }
    ?>
</body>
</html>