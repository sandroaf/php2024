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
                    location.assign('adm/excluiitem.php?item='+codigo);
                } else if (tabela == 'lista') {
                    //exclui lista
                    location.assign('adm/excluilista.php?lista='+codigo);
                }
            }
        }
    </script>
</head>
<body>
    <div class="conteudo">
        <h1>Lista de Compras</h1>
        <form action="index.php" method="GET">
            <input type="text" name="ibusca" id="ibusca" size="50">
            <button type="submit"><i class="fi fi-rr-search"></i></button>
            <input type="radio" name="itabela" id="itabelaLista" value="Lista"> Lista
            <input type="radio" name="itabela" id="itabaleItam" value="Item" checked> Item
        </form>
        <br>
        <?php 
           require_once('conexao.php');
           if (validalogin()) {
        ?>
            <button onclick="location.assign('adm/incluirlista.php')"><i class="fi fi-rr-add-document"></i> Novo</button>
            <br>
        <?php
            }
        ?>
        <?php
        try {
            $sqllista = "SELECT * FROM lista";
            if (isset($_GET['ibusca'])) {
                if (isset($_GET['itabela'])) {
                    if ($_GET['itabela'] == "Lista") {
                        $sqllista = "SELECT * FROM lista WHERE upper(nome) LIKE upper(\"%".$_GET['ibusca']."%\")";
                        //echo $sqllista;
                    } 
                }
            }
            $stmt = $conn->prepare($sqllista);
            $stmt->execute();
            foreach ($stmt as $linha) {            
                $sqlitem = "SELECT * FROM item where codigo_lista = ".$linha
                ["codigo"];
                if (isset($_GET['ibusca'])) {
                    if (isset($_GET['itabela'])) {
                        if ($_GET['itabela'] == "Item") {
                            $sqlitem = "SELECT * FROM item where codigo_lista = ".$linha["codigo"]." AND upper(descricao) LIKE upper(\"%".$_GET['ibusca']."%\")";
                            //echo $sqlitem;
                        } 
                    }
                }
                echo "<details open>";
                echo "<summary>".$linha["codigo"]." - ".$linha["nome"];
                if (validalogin()) {
                    echo " <button onclick=\"location.assign('adm/incluiritem.php?lista=".$linha["codigo"]."&nome=".$linha["nome"]."')\"> <i class=\"fi fi-rr-add-document\"></i> </button>";
                    echo "&nbsp;<button onclick=\"location.assign('adm/alterarlista.php?lista=".$linha["codigo"]."')\"><i class=\"fi fi-rr-edit\"></i></button>";
                    echo "&nbsp;<button onclick='excluir(\"lista\",\"".$linha["codigo"]."\")'><i class=\"fi fi-rr-trash\"></i></button>";
                }
                echo "</summary>";
                $stmtitem = $conn->prepare($sqlitem);
                $stmtitem->execute();
                echo "<ul>";
                foreach ($stmtitem as $linhaitem) {         
                    $timestamp = strtotime($linhaitem["datahora"]);
                    echo "<li>";
                    echo $linhaitem["codigo"]." - ".$linhaitem["descricao"]." - ".$linhaitem["quantidade"]." - <small>".date('d/m/Y h:i:s', $timestamp)."</small>";
                    if (validalogin()) {
                        echo "&nbsp;<button onclick=\"location.assign('adm/alteraritem.php?item=".$linhaitem["codigo"]."')\"><i class='fi fi-rr-edit'></i></button>";
                        echo "&nbsp;<button onclick='excluir(\"item\",\"".$linhaitem["codigo"]."\")'><i class=\"fi fi-rr-trash\"></i></button>";
                    }
                    echo "</li>";
                }
                echo "</ul>";
                echo "</details>";
            }
        } catch (PDOException $e) {
            echo "Erro ao conectar no Banco de Dados <br>".$e->getMessage(); 
        }
        ?>
        <div id="login">
            <?php
                if (validalogin()) {
                    echo "<a href='adm/logout.php'>Sair</a>";
                } else {
                    echo "<a href='adm/login.php'>Entrar</a>";
                }
            ?>
        </div> 
    </div>
</html>