<?php

    include ('conexao.php');

    function listarQtdCLientes(){
        $conexao = $_SESSION['conexao'];
        $comando = "";
        $comando = "SELECT COUNT(*) AS QtdCliente FROM Tb_Cliente";
        $qtdClientes_Query = mysqli_query($conexao,$comando);
        $linhas = mysqli_num_rows($qtdClientes_Query);
        $QtdClientes = 0;
        // Percorre a lista e cria um dado
        while ($dados= mysqli_fetch_array($qtdClientes_Query))
        {
            $QtdClientes =   $dados['QtdCliente'];
        }
        return $QtdClientes ;
    }
  
?>