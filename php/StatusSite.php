<?php
    include ('conexao.php');
    $Id = $_POST['Id'];
    $status = "";
    $comando = "";
    $comando = "SELECT * FROM Tb_StatusSite WHERE Id = '$Id'";
    $consultaBanco = mysqli_query($conexao,$comando);
    $linhas = mysqli_num_rows($consultaBanco);


    while($dados = mysqli_fetch_array($consultaBanco)){
        $status = $dados['Descricao'];
    }
    echo $status;


?>