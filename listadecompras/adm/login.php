<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='../estilo.css'>

    <title>Lista de Compras - Login</title>
</head>
<body>
    <div class="conteudo">
        <h1>Login</h1>
        <button onclick="location.assign('incluirusuario.php')"><i class="fi fi-rr-add-document"></i> Novo Usuário</button>
        <br>
        <br>
        <form action="efetualogin.php" method="post">
            <label for="iusuario">Usuário:</label>
            <input type="text" name="iusuario" id="iusuario" placeholder="Informe o usuário" size="40">
            <br>
            <label for="isenha">Senha:</label>
            <input type="password" name="isenha" id="isenha" placeholder="Informe a senha" size="40">
            <br>
            <br>
            <button type="submit" name="bsubmit" id="bsubmit">Entrar</button>
            <button type="reset" name="breset" id="breset">Cancelar</button>
        </form>
        <br>
        <button onclick="history.back()"><i class="fi fi-rr-arrow-left"></i> Voltar</button>
    </div>    
</body>
</html>