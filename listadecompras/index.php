<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>
<body>
    <h1>Lista de Compras</h1>
    <?php
       require_once('conexao.php');
       try {
          $stmt = $conn->prepare("SELECT * FROM lista");
          $stmt->execute();
          foreach ($stmt as $linha) {            
            echo "<details>";
            echo "<summary>".$linha["codigo"]." - ".$linha["nome"]."</summary>";
                $stmtitem = $conn->prepare("SELECT * FROM item where codigo_lista = ".$linha["codigo"]);
                $stmtitem->execute();
                echo "<ul>";
                foreach ($stmtitem as $linhaitem) {         
                echo "<li>";
                echo $linhaitem["codigo"]." - ".$linhaitem["descricao"]." - ".$linhaitem["quantidade"]." - ".$linhaitem["datahora"]." - ".$linhaitem["codigo_lista"];
                echo "</li>";
                }
                echo "</ul>";
            echo "</details>";
          }
       } catch (PDOException $e) {
           echo "Erro ao conectar no Banco de Dados <br>".$e->getMessage(); 
       }
    ?>
</html>