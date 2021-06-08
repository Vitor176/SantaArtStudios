<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualiza Pedido</title>
</head>
<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
    include ('./conexao.php');
    $dataconclusao = $_POST["date"];
    $idStatus = $_POST["idStatus"];
    $SiteSelecionado = $_POST["SiteSelecionado"];
    $mensagem = $_POST['mensagem'];
    $comando = " ";
    $comando = "UPDATE Tb_Site SET IdStatusSite = $idStatus, MotivoSiteRecusado = '$mensagem' WHERE Id = $SiteSelecionado";
    $buscaBanco = mysqli_query($conexao,$comando);
    if($buscaBanco){
        echo "<script>alert('Pedido Atualizado com Sucesso')</script>";
        echo "<script>window.location='./../page-user-dev.php'</script>";
    }
    else{
       echo "<script>alert('Erro ao atualizar pedido')</script>";

}
?>

</body>
</html>

