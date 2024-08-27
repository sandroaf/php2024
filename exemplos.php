<h2>Exemplo IF</h2>
<?php
    
    //define o fuso horário para America/Sao_Paulo
    date_default_timezone_set("America/Sao_Paulo");
    $t = date("H");
    echo "Hora: $t<br>";
    if ($t < "20") {
        echo "Tenha um bom dia!";
    }
?>
<br>
<h2>Exemplo SWITCH</h2>
<br>
<?php
	$tipo = 4;
	switch ($tipo) {
  	 case 1:
       echo "O tipo é 1 - Ótimo";
       break;//Quebra(pula) a execução para após o Switch
  	 case 2:
       echo "O tipo é 2 – Muito Bom";
       break;
  	 case 3:
       echo "O tipo é 3 – Bom";
       break;
  	 default:
       echo "O tipo " . $tipo . " não é bom";
      }
?>
<br>
<h2>Exemplo DO...While</h2>
<br>
<?php
    $x = 1;
    do {
     echo "The number is: $x <br>";
     $x++;
    } while ($x <= 5);
?>
<br>
<h2>Exemplo FOR</h2>
<br>

<?php
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
      }
  
?>
<br>
<h2>Exemplo FOREACH</h2>
<br>
<?php
    $status = array("Ótimo", "Muito Bom", "Bom");

    foreach ($status as $valor) {
      echo "$valor <br>";
    }
?>
<br>
<h2>Exemplo BREAK</h2>
<br>

<?php
   for ($x = 0; $x < 10; $x++) {
     if ($x == 4) {
       break;
     }
     echo "The number is: $x <br>";
   }
?>
<br>
<h2>Exemplo ARRAY unidimesional</h2>
<br>
<?php
    $carros = array("Volvo", "BMW", "Toyota");
    echo "Eu gosto de " . $carros[0] . ", " . $carros[1] . " and " . $carros[2] . ".";
?>
<?php
  $valores[0] = true;
  $valores[1] = 20;
  $valores[2] = "UNIDAVI";
  $valores[3] = 3.2;
  echo count($valores);
?>
<br>
<h2>Exemplo ARRAY Multimimensional</h2>
<br>
<?php
$cars = array(array("Volvo",22,18), array("BMW",15,13), array("Saab",5,2), array("Land Rover",17,15));

    echo $cars[0][0].":".$cars[0][1].":".$cars[0][2].".<br>";
    echo $cars[1][0].":".$cars[1][1].":".$cars[1][2].".<br>";
    echo $cars[2][0].":".$cars[2][1].":".$cars[2][2].".<br>";
    echo $cars[3][0].":".$cars[3][1].":".$cars[3][2].".<br>";
?>

<br>
<h2>Exemplo ARRAY Associativo</h2>
<br>
<?php
    $idade = array("João"=>"35", "Maria"=>"37", "José"=>"43");
    echo "João tem " . $idade["João"] . " anos.";
?>
<br>
<h2>Exemplo Iteração Matriz Associativa</h2>
<br>


<?php
    $idade = array("João"=>"35", "Maria"=>"37", "José"=>"43");
    foreach($idade as $chave => $valor) {
      echo "Chave='" . $chave . "', Valor=" . $valor;
      echo "<br>";
    }
?>

<?php
function foo($arg_1, $arg_2, /* ..., */ $arg_n)
{
   $valor_retornado = "retorno";
   echo "Exemplo de função.\n";
   return $valor_retornado;
}
?>


