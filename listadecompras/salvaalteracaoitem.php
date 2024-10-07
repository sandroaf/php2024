<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras - Salvar Alteração Item</title>
</head>
<body>
    <h1>Lista de Compras - Salvando Item Alterado</h1>
    <?php 
        require_once('conexao.php');
        if (isset($_POST["icodigoitem"])) {
            if ($_POST["idescricao"] != "") {
                try {
                    $descricao = $_POST['idescricao'];
                    $quantidade = $_POST['iquantidade'];
                    $codigoitem = $_POST['icodigoitem'];

                    $fmtquery = "UPDATE item SET descricao = \"%s\", quantidade = %d WHERE codigo = %d";

                    $query = sprintf($fmtquery,
                                     $descricao,
                                     $quantidade,
                                     $codigoitem);
                    //echo $query;
                    $stmt = $conn->prepare($query);
                    if ($stmt->execute()) {
                        echo "Item: ".$descricao."<br>Alterado com sucesso";
                    }
                } catch (PDOException $e) {
                    echo "Erro ao alterar o Item <br>".$e->getMessage(); 
                }
            } else {
                echo "Erro ao Alterar! Os dados devem ser informados";
            }
        } else {
            "Erro ao chamar rotina para Alterar Item";
        }
    ?>
    <br>
    <br>
    <button onclick="location.assign('index.php')"><< Voltar</button>
</body>
</html>