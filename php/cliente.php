<?php
    include ('conexao.php');
    $idcliente = $_GET['cliente_id'];
    $comando = "";
    $comando = "SELECT * FROM Tb_Cliente WHERE 1 = 1 AND Id = $idcliente";
    $buscarBanco = mysqli_query($conexao,$comando);
    $linhas = mysqli_num_rows($buscarBanco);
    $Id = 0;
    $email = "";
    $nome = "";
    $foto = "";
    $senha = "";
    $online = false;

    while ($dados = mysqli_fetch_array($buscarBanco)) {
        $Id = $dados['Id'];
        $email = $dados ['Email'];
        $nome = $dados['Senha'];
        $foto = $dados['Foto'];
        $senha = $dados['Senha'];
        $online = $dados['Online'];

        echo $Id;
        echo "$email<br>";
        echo "$nome<br>";
        echo "$foto<br>";
        echo "$senha<br>";
        echo "$online<br><hr>";
        
    }

?>