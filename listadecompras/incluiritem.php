<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras - Incluir Item</title>
</head>
<body>
    <h1>Incluir Item</h1>
    <form action="salvaitem.php" method="post">
        <label for="ilista">Lista:</label>
        <input type="text" name="ilista" id="ilista" value="<?=$_GET['lista']?>" size="3" readonly> <?=$_GET["nome"]?>
        <br>
        <label for="idescricao">Descricao:</label>
        <input type="text" name="idescricao" id="idescricao" placeholder="Informe a descrição do item" size="80">
        <br>
        <label for="iquantidade">Quantidade</label>
        <input type="number" value="1" name="iquantidade" id="iquantidade" size="3">
        <br>
        <br>
        <button type="submit" name="bsubmit" id="bsubmit">Salvar</button>
        <button type="reset" name="breset" id="breset">Cancelar</button>
    </form>
    <br>
    <button onclick="history.back()"><< Voltar</button>
</body>
</html>