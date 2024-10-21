<?php
    require_once('../conexao.php');
    if (!validalogin()) {
        header("Location: login.php");
    } else {    
        if (isset($_GET['lista'])) {
            try {
                //excluir itens da lista
                $sql = "delete from item where codigo_lista = %d";
                $query = sprintf($sql,$_GET['lista']);
                $stmt = $conn->prepare($query);
                $stmt->execute();
                echo "<script>window.alert('Itens da lista ".$_GET['lista']." excluidos com sucesso')</script>";
                //exclui lista
                $sql = "delete from lista where codigo = %d";
                $query = sprintf($sql,$_GET['lista']);
                $stmt = $conn->prepare($query);
                $stmt->execute();
                echo "<script>window.alert('Lista ".$_GET['lista']." excluido com sucesso');location.assign('../index.php');</script>";

            } catch (PDOException $e) {
                echo "Erro ao consultar item no Banco de Dados <br>".$e->getMessage(); 
            }
        }
    }
?>