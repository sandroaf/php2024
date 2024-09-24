<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras - Incluir Lista</title>
</head>
<body>
    <h1>Lista de Compras - Salvando Lista</h1>
    <?php 
        require_once('conexao.php');
        if (isset($_POST["inome"])) {
            if ($_POST["inome"] != "") {
                try {
                    $stmt = $conn->prepare("INSERT INTO lista (nome) VALUES ('".$_POST["inome"]."');");
                    if ($stmt->execute()) {
                        echo "Lista: ".$_POST["inome"]."<br>Incluída com sucesso";
                    }
                } catch (PDOException $e) {
                    echo "Erro ao Inserir a Lista <br>".$e->getMessage(); 
                }
            } else {
                echo "Erro ao Incluir! Nome da lista deve ser informado";
            }
        } else {
            "Erro ao chamar rotina para Incluir Lista";
        }
    ?>
    <br>
    <br>
    <button onclick="location.assign('index.php')"><< Voltar</button>
</body>
</html>