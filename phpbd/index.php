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

       try {
          $conn = new PDO("mysql:host=$db_servidor;dbname=$db_nome",$db_user,$db_senha);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

          echo "Acessando: $db_nome";

          $stmt = $conn->prepare("SELECT * FROM lista");
          $stmt->execute();
          echo "<br><ul>";
          foreach ($stmt as $linha) {
            
            echo "<li>";
            echo "<a href='listaitem.php?lista=".$linha["codigo"]."&nome=".$linha["nome"]."'>".$linha["codigo"]." - ".$linha["nome"]."</a>";
            echo "</li>";
          }
          echo "</ul>";

       } catch (PDOException $e) {
           echo "Erro ao conectar no Banco de Dados <br>".$e->getMessage(); 
       }
    ?>
</html>