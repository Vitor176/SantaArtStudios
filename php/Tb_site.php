<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    function listaSitesOptions($nome_select){
        include ('conexao.php');
    $option = "";
    $comando = "";
    $comando = "SELECT * FROM Tb_site WHERE 1 = 1";
    $buscaBanco = mysqli_query($conexao,$comando);
    $linhas = mysqli_num_rows($buscaBanco);
    $idSite = 0;
    $dataproposta = "";
    $dataconclusao = "";
    $nomesite = "";
    $idstatussite = 0;
    $idcliente = 0;

    while($dados = mysqli_fetch_array($buscaBanco)){ 
        $idSite = $dados['Id'];
        $dataproposta = $dados['DataProposta'];
        $dataconclusao = $dados['DataConclusao'];
        $nomesite = $dados['NomeSite'];
        $idstatussite = $dados['IdStatusSite'];
        $idcliente =  $dados['IdCliente'];  
        // $option = $option."  <option value='".$idSite."'>".$nomesite."</option>  ";
        
        // echo "IdSite = $idSite";
        // echo " Data Proposta = $dataproposta";
        // echo " Data Conclusão = $dataproposta";
        // echo " Nome do site $nomesite";
        // echo " ID Status do site<a href='http://localhost:8080/Santa%20Art/php/Tb_statussite.php?Id_status=$idstatussite'> = $idstatussite</a>";
        // echo " ID Cliente< = <a href='http://localhost:8080/Santa%20Art/php/cliente.php?cliente_id=$idcliente'>$idcliente</a><br><hr>";
    }
    $option = "  <option value='2'>Site 2</option>  ";
    sleep(5);
    echo "<script>document.getElementById('sites').innerHTML = "$option" </script>";
    // echo "<script>document.getElementById('$nome_select').innerHTML='$option'</script>";
    
    

}   

?>