<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='estilo.css'>

    <title>Lista de Compras - Incluir Item</title>
</head>
<body>
    <div class="conteudo">
        <h1>Lista de Compras - Salvando Item</h1>
        <?php 
            require_once('conexao.php');
            if (isset($_POST["idescricao"])) {
                if ($_POST["idescricao"] != "") {
                    try {
                        $descricao = $_POST['idescricao'];
                        $quantidade = $_POST['iquantidade'];
                        $lista = $_POST['ilista'];

                        $fmtquery = "INSERT INTO item (descricao, quantidade, codigo_lista) VALUES ('%s',%d,%d)";

                        $query = sprintf($fmtquery,
                                        $descricao,
                                        $quantidade,
                                        $lista);
                        //echo $query;
                        $stmt = $conn->prepare($query);
                        if ($stmt->execute()) {
                            echo "Item: ".$descricao."<br>Incluído com sucesso";
                        }
                    } catch (PDOException $e) {
                        echo "Erro ao Inserir o Item <br>".$e->getMessage(); 
                    }
                } else {
                    echo "Erro ao Incluir! Os dados devem ser informados";
                }
            } else {
                "Erro ao chamar rotina para Incluir Item";
            }
        ?>
        <br>
        <br>
        <button onclick="location.assign('index.php')"><i class="fi fi-rr-arrow-left"></i> Voltar</button>
    </div>
</body>
</html>