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
       $db_nome = "listadecompras";
       $db_user = "root";
       $db_senha = "";

       try {
        $conn = new PDO("mysql:host=$db_servidor;dbname=$db_nome",$db_user,$db_senha);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

          echo "Conexão bem suscedida em $db_nome";

          $stmt = $conn->prepare("SELECT * FROM lista");
          $stmt->execute();
          echo "<br><ul>";
          foreach ($stmt as $linha) {
            echo "<li>";
            echo $linha["codigo"]." - ".$linha["nome"];
            echo "</li>";
          }
          echo "</ul>";

       } catch (PDOException $e) {
           echo "Erro ao conectar no Banco de Dados <br>".$e->getMessage(); 
       }
    ?>
</html>