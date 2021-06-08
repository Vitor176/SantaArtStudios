<?php
    session_start();
    include ('conexao.php');
    $id = $_SESSION['idCliente'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $telefone = $_POST['telefone'];
    $comando = "";
    $comando = "UPDATE Tb_Cliente SET Nome = '$nome', Cpf = '$cpf', Endereco = '$endereco', Cidade = '$cidade', Telefone = '$telefone' WHERE Id = $id";
    $update = mysqli_query($conexao,$comando);
    if($update){
        echo "<script>alert('Dados Atualizados com Sucesso')</script>";
        echo "<script>window.location = './../page-user.php'</script>";
    }
    else{
        echo "<script>alert('Erro, não conseguimos atualizar seus Dados')</script>";
        echo $comando;
    }
?>