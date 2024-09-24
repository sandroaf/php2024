<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras - Incluir Lista</title>
</head>
<body>
    <h1>Incluir Lista</h1>
    <form action="salvalista.php" method="post">
        <label for="inome">Nome:</label>
        <input type="text" name="inome" id="inome" placeholder="Informe um nome para lista" size="80">
        <br>
        <br>
        <button type="submit" name="bsubmit" id="bsubmit">Salvar</button>
        <button type="reset" name="breset" id="breset">Cancelar</button>
    </form>
    <br>
    <button onclick="history.back()"><< Voltar</button>
</body>
</html>