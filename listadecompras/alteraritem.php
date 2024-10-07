<?php
    require_once('conexao.php');
    if (isset($_GET['item'])) {
        try {
            $sql = "select item.*, lista.nome 
                     from item, lista 
                     where item.codigo = %d 
                       and item.codigo_lista = lista.codigo";

            $query = sprintf($sql,$_GET['item']);
            //echo $query;
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $item = $stmt->fetch(PDO::FETCH_ASSOC);
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
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='estilo.css'>

    <title>Lista de Compras - Alterar Item</title>
</head>
<body>
    <div class="conteudo">
        <h1>Alterar Item - <?=$item['codigo']?></h1>
        <form action="salvaalteracaoitem.php" method="post">
            <input type="hidden" name="icodigoitem" value="<?=$item['codigo']?>">
            <label for="ilista">Lista:</label>
            <input type="text" name="ilista" id="ilista" value="<?=$item['codigo_lista']?>" size="3" readonly/> - <?=$item['nome']?>
            <br>
            <label for="idescricao">Descricao:</label>
            <input type="text" name="idescricao" id="idescricao" placeholder="Informe a descrição do item" size="80" value="<?=$item['descricao']?>">
            <br>
            <label for="iquantidade">Quantidade</label>
            <input type="number" value="<?=$item['quantidade']?>" name="iquantidade" id="iquantidade" size="3">
            <br>
            <br>
            <button type="submit" name="bsubmit" id="bsubmit">Salvar</button>
            <button type="reset" name="breset" id="breset">Cancelar</button>
        </form>
        <br>
        <button onclick="history.back()"><i class="fi fi-rr-arrow-left"></i> Voltar</button>
    </div>
</body>
</html>