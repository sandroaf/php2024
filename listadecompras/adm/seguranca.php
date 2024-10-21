<?php
session_start();

function login($usu,$sen) {
    global $usuario, $senha;
    require_once('../conexao.php');
    global $conn;
    $sql = "select * from usuario where nome = '%s'";
    $query = sprintf($sql,strip_tags($usu));
    //echo $query;
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $usuario = $row['nome'];
    $senha = $row['senha'];
    //echo "<script>window.alert('".$usuario." - ".$senha."');</script>";
    if ($usu == $usuario && password_verify($sen,$senha)) {
        $_SESSION['usuario'] = $usu;
        $_SESSION['senha'] = $senha;
        $_SESSION['token'] = password_hash('seg'.$usu.$senha,PASSWORD_DEFAULT);
        return true;
    } else {
        return false;
    }
}

function validalogin() {
    if (isset($_SESSION['usuario']) && isset($_SESSION['senha'])) {
        if (password_verify('seg'.$_SESSION['usuario'].$_SESSION['senha'],$_SESSION['token'])) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
?>