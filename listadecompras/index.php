<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='estilo.css'>
    <title>Lista de Compras</title>
</head>
<body>
    <div class="conteudo">
        <h1>Lista de Compras</h1>
        <button onclick="location.assign('adm/login.php')"><i class="fi fi-rr-list-check"></i> <a href='adm/login.php'>Entrar</a></button>
        <br>

        <?php
            try {
                require_once('conexao.php');

                $sql = "select 'usuarios' as tabela, COUNT(nome) as numero from usuario union select 'listas' as tabela, COUNT(codigo) as numero from lista union select 'itens' as tabela, COUNT(codigo) as numero from item";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $numeros = array();
                for ($i = 0; $i < $stmt->rowCount(); $i++) {
                    $linha = $stmt->fetch();
                    $numeros[$linha['tabela']] = $linha['numero'];
                }
                $exibicao = "<table class='numeros'>
                    <tr>
                        <th class='usuarios'>Usuários</th>
                        <th class='listas'>Listas</th>
                        <th class='itens'>Itens</th>
                    </tr>
                    <tr>
                        <td class='usuarios'>%s</td>
                        <td class='listas'>%s</td>
                        <td class='itens'>%s</td>
                    </tr>
                </table>";
                echo sprintf($exibicao, $numeros['usuarios'], $numeros['listas'], $numeros['itens']);
            } catch (PDOException $e) {
                echo "Erro: ".$e->getMessage();
            }


         ?>

    </div>
</html>