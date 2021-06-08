<?php
    include ('conexao.php');
    $idrecebido = $_GET['Id_status'];
    $cor = 'black';
    $comando = "";
    $comando = "SELECT * FROM tb_statussite WHERE 1 = 1 AND Id = $idrecebido";
    $buscaBanco = mysqli_query($conexao,$comando);
    $linhas = mysqli_num_rows($buscaBanco);
    $id = 1;
    $descricao = "";
  

    // [1,'Site em Análise']
    // [2,'Site em Criação']
    // [3,'Site Finalizado']
    // [4,'Site Entregue']



    while($dados = mysqli_fetch_array($buscaBanco)){
        $id = $dados['Id'];
        $descricao = $dados['Descricao'];
        echo $id;
        echo " - $descricao<br>";
    }
    if($id == 1){
        $cor = 'whitesmoke';
    }
    if($id == 2){
        $cor = 'blue';
    }
    if($id == 3){
        $cor = 'yellow';
    }
    if($id == 4){
        $cor = 'green';
    }
    if($id > 5){
        $cor = 'white';
    }
    echo "<script>";
    echo "document.body.style.backgroundColor = '$cor';";
    echo "</script>";

?>