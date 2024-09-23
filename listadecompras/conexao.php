<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão Banco de Dados da Aplicação</title>
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
       } catch (PDOException $e) {
          echo "Erro ao conectar no Banco de Dados <br>".$e->getMessage(); 
          exit(1);
       }          
    ?>    
</body>
</html>
