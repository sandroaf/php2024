<?php
    require_once('../conexao.php');
    if (!validalogin()) {
        header("Location: login.php");
    } else {
        if (isset($_GET['item'])) {
            try {
                $sql = "delete from item where codigo = %d and usuario_nome = '%s'";
                $query = sprintf($sql,$_GET['item'],$_SESSION['usuario']);
                //echo $query;
                $stmt = $conn->prepare($query);
                $stmt->execute();
                echo "<script>window.alert('Item ".$_GET['item']." excluido com sucesso');location.assign('listas.php')</script>";

            } catch (PDOException $e) {
                echo "Erro ao consultar item no Banco de Dados <br>".$e->getMessage(); 
            }
        }
    }
?>