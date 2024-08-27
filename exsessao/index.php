<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo uso de Sessão no PHP</title>
</head>
<body>
    <h1>Contador</h1>
    <form action="#" method="post">
        <button name="acao" type="submit" value="adicionar">Adicionar</button>
        <button name="acao" type="submit" value="subtrair">Subtrair</button>
        <button name="acao" type="submit" value="limpar">Limpar</button>

     </form>
    <h2>
        <?php
           session_start();
           if (!isset($_SESSION["contator"])) {
              $_SESSION["contator"] = 0;
           }
           if ($_POST) {
               if ($_POST["acao"] == "adicionar") {
                  $_SESSION["contator"]++;
               } elseif ($_POST["acao"] == "subtrair") {
                  $_SESSION["contator"]--;
               } 
           }
           echo $_SESSION["contator"];
           if ($_POST["acao"] == "limpar") {
              unset($_SESSION["contator"]);
           } 
        ?>
    </h2>
    
</body>
</html>