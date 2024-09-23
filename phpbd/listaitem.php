<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Acessando Banco de Dados</title>
</head>
<body>
    <?php
       $db_servidor = "localhost";
       $db_nome = "lista_compras";
       $db_user = "root";
       $db_senha = "";

       if (isset($_GET["lista"])) {
            try {
                $conn = new PDO("mysql:host=$db_servidor;dbname=$db_nome",$db_user,$db_senha);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

                echo "Acessando: $db_nome<br>";
                echo "Lista: ".$_GET["lista"]." - ".$_GET["nome"]."<br>";

                $stmt = $conn->prepare("SELECT * FROM item where codigo_lista = ".$_GET["lista"]);
                $stmt->execute();
                echo "<br><ul>";
                foreach ($stmt as $linha) {         
                echo "<li>";
                echo $linha["codigo"]." - ".$linha["descricao"]." - ".$linha["quantidade"]." - ".$linha["datahora"]." - ".$linha["codigo_lista"];
                echo "</li>";
                }
                echo "</ul>";

            } catch (PDOException $e) {
                echo "Erro ao conectar no Banco de Dados <br>".$e->getMessage(); 
            }
        } else {
            echo "Necessário informar código da lista";
        }
    ?>
    <br>
    <a href="index.php">Voltar</a>
</html>