<?php
    include ('./../php/conexao.php');
    session_start();
    $idCliente = $_SESSION['idCliente'];
    $nomesite = $_POST['nomeSite'];
    $servicos = implode(', ', $_POST['servicos']);
    $comando = " ";
    $comando = "INSERT INTO Tb_Site VALUES(null,null,null,'$nomesite',1,$idCliente,'$servicos',null)";
    $banco = mysqli_query($conexao,$comando) OR die(mysqli_error($conexao));
    if($banco){
        echo "<script>alert('Site Cadastrado Com Sucesso!')</script>";
        echo "<script>window.location='./../page-user.php'</script>";
    }
    

?>