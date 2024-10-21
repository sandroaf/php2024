<?php
    require_once('../conexao.php');
    if (!validalogin()) {
        header("Location: login.php");
    } else {
        if (isset($_GET['item'])) {
            try {
                $sql = "delete from item where codigo = %d";
                $query = sprintf($sql,$_GET['item']);
                //echo $query;
                $stmt = $conn->prepare($query);
                $stmt->execute();
                echo "<script>window.alert('Item ".$_GET['item']." excluido com sucesso');location.assign('../index.php')</script>";

            } catch (PDOException $e) {
                echo "Erro ao consultar item no Banco de Dados <br>".$e->getMessage(); 
            }
        }
    }
?>