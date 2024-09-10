<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Array PHP 01c - Array - Matriz Associativa</title>
</head>
<body>
    <h1>Exercício Array PHP 01c</h1>
    <p>Array - Matriz Associativa</p>
    <br>
    <h2>Entrada da Dados</h2>
    <form action="adicionar.php" method="POST">    
        <fieldset>
            <legend>Dados Aluno</legend>
            <label for="inome">Nome:</label>
            <input type="text" name="inome" id="inome">
            <label for="inota">Nota:</label>
            <input type="text" name="inota" id="inota" size="5">
            <button type="submit">Adicionar</button>
        </fieldset>
    </form>
    <br>
    <form action="media.php" method="POST">
        <button type="submit">Calcular Médias</button>    
    </form>
</body>
</html>