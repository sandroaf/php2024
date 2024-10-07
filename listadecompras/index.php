<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='estilo.css'>
    <title>Lista de Compras</title>
    <script>
        function excluir(tabela,codigo) {
            if (window.confirm('Confirma exclusão '+tabela+' codigo - '+codigo)) {
                if (tabela == 'item') {
                    //exclui item
                    location.assign('excluiitem.php?item='+codigo);
                } else if (tabela == 'lista') {
                    //exclui lista
                    location.assign('excluilista.php?lista='+codigo);
                }
            }
        }
    </script>
</head>
<body>
    <div class="conteudo">
        <h1>Lista de Compras</h1>
        <button onclick="location.assign('incluirlista.php')"><i class="fi fi-rr-add-document"></i> Novo</button>
        <br>
        <br>

        <?php
        require_once('conexao.php');
        try {
            $stmt = $conn->prepare("SELECT * FROM lista");
            $stmt->execute();
            foreach ($stmt as $linha) {            
                echo "<details>";
                echo "<summary>".$linha["codigo"]." - ".$linha["nome"];
                    echo " <button onclick=\"location.assign('incluiritem.php?lista=".$linha["codigo"]."&nome=".$linha["nome"]."')\"> <i class=\"fi fi-rr-add-document\"></i> </button>";
                    echo "&nbsp;<button onclick=\"location.assign('alterarlista.php?lista=".$linha["codigo"]."')\"><i class=\"fi fi-rr-edit\"></i></button>";
                    echo "&nbsp;<button onclick='excluir(\"lista\",\"".$linha["codigo"]."\")'><i class=\"fi fi-rr-trash\"></i></button>";
                    echo "</summary>";
                $stmtitem = $conn->prepare("SELECT * FROM item where codigo_lista = ".$linha["codigo"]);
                $stmtitem->execute();
                echo "<ul>";
                foreach ($stmtitem as $linhaitem) {         
                    $timestamp = strtotime($linhaitem["datahora"]);
                    echo "<li>";
                    echo $linhaitem["codigo"]." - ".$linhaitem["descricao"]." - ".$linhaitem["quantidade"]." - <small>".date('d/m/Y h:m:s', $timestamp)."</small>";
                    echo "&nbsp;<button onclick=\"location.assign('alteraritem.php?item=".$linhaitem["codigo"]."')\"><i class='fi fi-rr-edit'></i></button>";
                    echo "&nbsp;<button onclick='excluir(\"item\",\"".$linhaitem["codigo"]."\")'><i class=\"fi fi-rr-trash\"></i></button>";
                    echo "</li>";
                }
                echo "</ul>";
                echo "</details>";
            }
        } catch (PDOException $e) {
            echo "Erro ao conectar no Banco de Dados <br>".$e->getMessage(); 
        }
        ?>
    </div>
</html>