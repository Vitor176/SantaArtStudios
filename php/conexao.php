<?php 
    //if(!empty($_SESSION["conexao"])){
  
    //}
    //(empty($_SESSION["conexao"])){

        $servidor = "localhost";
        $usuario = "id15527969_localhost";
        $senha = "?Dm$4/+PNYcqc9yW";
        $banco = "id15527969_santaart";
    
        $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
        $_SESSION['conexao'] = $conexao;
        mysqli_set_charset($conexao,"utf8");
    //}


?>