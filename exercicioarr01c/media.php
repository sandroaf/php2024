<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px 3px;
        }
</style>
    <title>Média</title>
</head>
<body>
    <h1>Média</h1>
    <?php
        if (isset($_SESSION['notas'])) {
            $soma = 0;
            arsort($_SESSION['notas']); 
            echo "<table >";
            echo "<tr><th>Nome</th><th>Nota</th></tr>";
            foreach ($_SESSION['notas'] as $nome => $nota) {
                echo "<tr><td>$nome</td><td>$nota</td></tr>";
                $soma = $soma + $nota;
            }
            echo "</table>";
            echo "<br>";
            echo "Aluno com maior nota: ".key($_SESSION['notas'])." - ".current($_SESSION['notas']);
            echo "<br>";
            echo "Média das notas: ".($soma / count($_SESSION['notas']));    
        }
    ?>
    <br>
    <form action="limpar.php" method="GET">
        <button type="submit">Limpar Notas</button>
    </form>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>