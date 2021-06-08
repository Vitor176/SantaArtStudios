<?php
    include ('./conexao.php');
    session_start();
    $idDev = $_SESSION['idDesenvolvedor'];
    $nomeDev = $_POST['nome'];
    $novoEmail = $_POST['novoemail'];
    $novaSenha = isset($_POST["novasenha"]) ? md5(trim($_POST["novasenha"])) : FALSE;
    $comando = "";
    $comando = "UPDATE Tb_Desenvolvedor SET Nome = '$nomeDev', Email = '$novoEmail', Senha = '$novaSenha' WHERE Id = $idDev";
    $updateBanco = mysqli_query($conexao,$comando);
    if($updateBanco){
        echo "<script>alert('Dados Atualizados com Sucesso!!')</script>";
        echo "<script>window.location='./../page-user-dev.php'</script>";
    }
    else{
        echo "<script>alert('Não conseguimos atualizar seus Dados!!')</script>";
        echo $comando;
        //echo "<script>window.location='./../page-user-dev.php'</script>";
    }
?>