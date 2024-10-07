<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras - Salvar Alteração Lista</title>
</head>
<body>
    <h1>Lista de Compras - Salvando Lista Alterada</h1>
    <?php 
        require_once('conexao.php');
        if (isset($_POST["icodigo"])) {
            if ($_POST["inome"] != "") {
                try {
                    $nome = $_POST['inome'];
                    $codigo = $_POST['icodigo'];

                    $fmtquery = "UPDATE lista SET nome = \"%s\"
                     WHERE codigo = %d";

                    $query = sprintf($fmtquery,
                                     $nome,
                                     $codigo);
                    echo $query;
                    $stmt = $conn->prepare($query);
                    if ($stmt->execute()) {
                        echo "Lista: ".$nome."<br>Alterada com sucesso";
                    }
                } catch (PDOException $e) {
                    echo "Erro ao alterar a lista <br>".$e->getMessage(); 
                }
            } else {
                echo "Erro ao Alterar! Os dados devem ser informados";
            }
        } else {
            "Erro ao chamar rotina para Alterar Lista";
        }
    ?>
    <br>
    <br>
    <button onclick="location.assign('index.php')"><< Voltar</button>
</body>
</html>