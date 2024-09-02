<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Array em PHP</title>
</head>
<body>
    <h2>Exemplo 1</h2>
    <?php
       $carro = array("BMW","FORD","AUDI");
       echo "Eu gosto de carros das marcas: $carro[0], $carro[1] e $carro[2]";
    ?>
   <h2>Exemplo 2</h2> 
   <h3>Dias da semana</h3>
   <ol>
   <?php
       $diadasemana = array("Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado");
       for ($i = 0; $i < count($diadasemana); $i++) {
           echo "<li>$diadasemana[$i]</li>";
       }
   ?>
   </ol>
    <h2>Exemplo Matriz Associativa</h2>
    <?php
        $idade = array("João"=>"35", "Maria"=>"37", "José"=>"43");
        $idade["Sandro"] = "46";
        foreach($idade as $chave => $valor) {
        echo "Chave='" . $chave . "', Valor=" . $valor;
        echo "<br>";
        }
    ?>
</body>
</html>