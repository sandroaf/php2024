<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='../estilo.css'>

    <title>Lista de Compras - Salvar Alteração Lista</title>
</head>
<body>
    <div class="conteudo">
        <h1>Lista de Compras - Salvando Lista Alterada</h1>
        <?php 
            require_once('../conexao.php');
            if (!validalogin()) {
                header("Location: login.php");
            } else {   
                if (isset($_POST["icodigo"])) {
                    if ($_POST["inome"] != "") {
                        try {
                            $nome = $_POST['inome'];
                            $codigo = $_POST['icodigo'];

                            $fmtquery = "UPDATE lista SET nome = \"%s\"
                            WHERE codigo = %d AND usuario_nome = \"%s\"";

                            $query = sprintf($fmtquery,
                                            $nome,
                                            $codigo,
                                            $_SESSION['usuario']);
                            //echo $query;
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
            }
        ?>
        <br>
        <br>
        <button onclick="location.assign('listas.php')"><i class="fi fi-rr-arrow-left"></i> Voltar</button>
    </div>
    </body>
</html>