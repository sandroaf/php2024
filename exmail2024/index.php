<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
    <h1>Contato</h1>
    <form action="envio.php" method="POST">
        <label for="inome">Nome:</label>
        <input type="text" name="inome" id="inome"><br>
        <label for="iemail">e-mail:</label>
        <input type="email" name="iemail" id="iemail"><br>
        <label for="ifone">Telefone:</label>
        <input type="tel" name="ifone" id="ifone"><br>
        <label for="iassunto">Assunto:</label>
        <input type="text" name="iassunto" id="iassunto"><br>
        <label for="tmensagem">Mensagem:</label>
        <textarea name="tmensagem" id="tmensagem"></textarea>
        <br>
        <button name="benviar" id="benviar">Enviar</button>
    </form>
    
</body>
</html>