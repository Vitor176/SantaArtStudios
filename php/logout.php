<?php
    include ('./conexao.php');
    session_unset();
    session_destroy();
    setcookie() ;
    header('Location: ./../login.html');
?>