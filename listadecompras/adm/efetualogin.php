<?php 
    require_once('../conexao.php');
    if (isset($_POST['iusuario']) && isset($_POST['isenha'])) {
        if (login($_POST['iusuario'],$_POST['isenha'])) {
            echo "<script>location.assign('../index.php')</script>";
        } else {
            echo "<script>window.alert('Usuário ou senha inválidos');location.assign('login.php')</script>";
        }
    } else {
        echo "<script>window.alert('Usuário ou senha inválidos');location.assign('login.php')</script>";
    }   
?>
