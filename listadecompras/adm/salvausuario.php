<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='../estilo.css'>

    <title>Lista de Compras - Salvar usuário</title>
</head>
<body>
    <div class="conteudo">
        <h1>Lista de Compras - Salvar usuário</h1>
        <?php 
            require_once('../conexao.php');
            if (isset($_POST["inome"]) && isset($_POST["isenha"])) {
                if ($_POST["inome"] != "" && $_POST["isenha"] != "") {
                    try {
                        $stmt = $conn->prepare("INSERT INTO usuario (nome, senha) VALUES ('".$_POST["inome"]."','".password_hash($_POST["isenha"], PASSWORD_DEFAULT)."');");
                        if ($stmt->execute()) {
                            echo "Usuário: ".$_POST["inome"]."<br>Incluída com sucesso";
                        }
                    } catch (PDOException $e) {
                        echo "Erro ao Inserir o usuário <br>".$e->getMessage(); 
                    }
                } else {
                    echo "Erro ao Incluir! Valores devem ser informados";
                }
            } else {
                "Erro ao chamar rotina para Incluir usuário";
            }
        ?>
        <br>
        <br>
        <button onclick="location.assign('../index.php')"><i class="fi fi-rr-arrow-left"></i> Voltar</button>
    </div>
</body>
</html>