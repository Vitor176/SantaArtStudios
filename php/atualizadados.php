<?php
    include ('conexao.php');
    session_start();
    $email = $_SESSION['emailCliente'];
    $novoemail = $_POST['novoemail'];
    $novasenha = isset($_POST["novasenha"]) ? md5(trim($_POST["novasenha"])) : FALSE;
    $id = $_SESSION['idCliente'];
    $comando = "";
    $comando = "UPDATE Tb_Cliente SET email = '$novoemail', senha = '$novasenha' WHERE Id ='$id'";
    $atualizaBanco = mysqli_query($conexao,$comando);
    if($atualizaBanco){
        echo "<script>alert('Dados Atualizados com Sucesso!!')</script>";
        echo "<script>window.location ='./../page-user.php'</script>'";
    }

?>