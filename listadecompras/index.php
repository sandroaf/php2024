<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>
<body>
    <h1>Lista de Compras</h1>
    <button onclick="location.assign('incluirlista.php')">+ Novo</button>
    <br>
    <br>
    <?php
       require_once('conexao.php');
       try {
          $stmt = $conn->prepare("SELECT * FROM lista");
          $stmt->execute();
          foreach ($stmt as $linha) {            
            echo "<details>";
            echo "<summary>".$linha["codigo"]." - ".$linha["nome"];
                echo " <button onclick=\"location.assign('incluiritem.php?lista=".$linha["codigo"]."&nome=".$linha["nome"]."')\"> + </button></summary>";
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