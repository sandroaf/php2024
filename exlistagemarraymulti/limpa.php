<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
   session_start();
   unset($_SESSION["dados"]);
   echo "<h2>Dados limpados</h2>";
   require_once("form.php");
?>    
</body>
</html>

