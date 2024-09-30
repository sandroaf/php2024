<?php
//Precisa habilitar extensões no php.ini 
//extension=pdo_pgsql 
//extension=pgsql

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost'; // ou o endereço do servidor
$port = '5432'; // porta padrão do PostgreSQL
$dbname = 'livro'; // nome do seu banco de dados
$user = 'postgres'; // seu usuário do banco de dados
$password = 'postgres'; // sua senha do banco de dados

try {
    // Cria a conexão usando PDO
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password);

    // Define o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão bem-sucedida ao PostgreSQL!<br>";
    echo "Acessando: $dbname";

    $stmt = $pdo->prepare("SELECT * FROM livro");
    $stmt->execute();
    echo "<br><ul>";
    foreach ($stmt as $linha) {
      
      echo "<li>";
      echo "Codigo".$linha["codigo"]." Livro: ".$linha["titulo"]." autor: ".$linha["autor"]." ano: ".$linha["ano"];
      echo "</li>";
    }
    echo "</ul>";

} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}