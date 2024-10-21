<?php 
    require_once('seguranca.php');
    session_destroy();
    echo "<script>window.alert('Logout efetuado com sucesso');location.assign('../index.php')</script>";
?>