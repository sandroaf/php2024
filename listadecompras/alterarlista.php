<?php
    require_once('conexao.php');
    if (isset($_GET['lista'])) {
        try {
            $sql = "select * 
                     from lista 
                     where codigo = %d";

            $query = sprintf($sql,$_GET['lista']);
            //echo $query;
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $lista = $stmt->fetch(PDO::FETCH_ASSOC);
            //print_r($item);
        } catch (PDOException $e) {
            echo "Erro ao consultar item no Banco de Dados <br>".$e->getMessage(); 
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras - Alterar Lista</title>
</head>
<body>
    <h1>Alterar Lista - <?=$lista['codigo']?></h1>
    <form action="salvaalteracaolista.php" method="post">
        <input type="hidden" name="icodigo" value="<?=$lista['codigo']?>">
        <label for="inome">Nome:</label>
        <input type="text" name="inome" id="inome" value="<?=$lista['nome']?>" size="20">
        <br>
        <button type="submit" name="bsubmit" id="bsubmit">Salvar</button>
        <button type="reset" name="breset" id="breset">Cancelar</button>
    </form>
    <br>
    <button onclick="history.back()"><< Voltar</button>
</body>
</html>