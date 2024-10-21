<?php
   date_default_timezone_set("America/Sao_Paulo");
   $db_servidor = "localhost";
   $db_nome = "lista_compras";
   $db_user = "root";
   $db_senha = "";
   @require_once('adm/seguranca.php');

   try {
      $conn = new PDO("mysql:host=$db_servidor;dbname=$db_nome",$db_user,$db_senha);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
   } catch (PDOException $e) {
      echo "Erro ao conectar no Banco de Dados <br>".$e->getMessage(); 
      exit(1);
   }          
?>    