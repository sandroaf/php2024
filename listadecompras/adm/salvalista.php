<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='../estilo.css'>

    <title>Lista de Compras - Incluir Lista</title>
</head>
<body>
    <div class="conteudo">
        <h1>Lista de Compras - Salvando Lista</h1>
        <?php 
            require_once('../conexao.php');
            if (!validalogin()) {
                header("Location: login.php");
            } else {    
                if (isset($_POST["inome"])) {
                    if ($_POST["inome"] != "") {
                        try {
                            $stmt = $conn->prepare("INSERT INTO lista (nome, usuario_nome) VALUES ('".$_POST["inome"]."','".$_SESSION['usuario']."');");
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
            }
        ?>
        <br>
        <br>
        <button onclick="location.assign('listas.php')"><i class="fi fi-rr-arrow-left"></i> Voltar</button>
    </div>
</body>
</html>