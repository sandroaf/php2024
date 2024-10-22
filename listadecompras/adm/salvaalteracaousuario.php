<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='../estilo.css'>

    <title>Lista de Compras - Salvar Alteração Usuário</title>
</head>
<body>
    <div class="conteudo">
        <h1>Lista de Compras - Salvando usuário</h1>
        <?php 
            require_once('../conexao.php');
            if (!validalogin()) {
                header("Location: login.php");
            } else {   
                if (isset($_POST["isenha"])) {
                    if ($_POST["isenha"] != "") {
                        try {
                            $senha = $_POST['isenha'];

                            $fmtquery = "UPDATE usuario SET senha = \"%s\"
                            WHERE nome = \"%s\"";

                            $query = sprintf($fmtquery,
                                            password_hash($_POST["isenha"], PASSWORD_DEFAULT),
                                            $_SESSION['usuario']);
                            //echo $query;
                            $stmt = $conn->prepare($query);
                            if ($stmt->execute()) {
                                echo "Usuário: ".$_SESSION['usuario']."<br>Alterada com sucesso";
                            }
                        } catch (PDOException $e) {
                            echo "Erro ao alterar o usuário <br>".$e->getMessage(); 
                        }
                    } else {
                        echo "Erro ao Alterar! Os dados devem ser informados";
                    }
                } else {
                    "Erro ao chamar rotina para Alterar Usuário";
                }
            }
        ?>
        <br>
        <br>
        <button onclick="location.assign('listas.php')"><i class="fi fi-rr-arrow-left"></i> Voltar</button>
    </div>
    </body>
</html>