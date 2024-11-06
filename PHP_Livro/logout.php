<?php 
    require_once('seguranca.php');
    session_destroy();
    echo "<script>window.alert('Sessão encerrada com sucesso');location.assign('index.php')</script>";
?>