<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo GET no PHP</title>
</head>
<body>
    <h2>Exemplo de passagem de parâmetros em aplicações PHP</h2>
    <form action="resposta.php" method="GET">
        <label for="inome">Nome:</label>
        <input name="inome" id="inome" placeholder="Qual seu nome?" size="60">
        <br>
        <label for="icidade">Cidade:</label>
        <input name="icidade" id="icidade" placeholder="Onde você mora?" size="60">
        <br>
        <br>
        <button type="submit">Enviar</button> 
    </form>
</body>
</html>