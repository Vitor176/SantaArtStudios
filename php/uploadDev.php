    
<?php
    include ('./conexao.php');
    session_start();
    $Id = $_SESSION['idDesenvolvedor'];   
    $msg = false;

    if(isset($_FILES['image'])){
        $extensao = strtolower(substr($_FILES['image']['name'], -4));
        $novo_nome = md5(time()). $extensao;
        $diretorio = "./../img/img_banco_dev/";

        move_uploaded_file($_FILES['image']['tmp_name'], $diretorio.$novo_nome);

        $sql = "UPDATE Tb_Desenvolvedor SET Foto = '$novo_nome' WHERE Id = $Id";
        if(mysqli_query($conexao,$sql)){
            $_SESSION['fotoDesenvolvedor'] = $novo_nome;
            echo "<script>window.location='./../page-user-dev.php'</script>"; 
        }
        else{
            echo "ERRO";
        }
    }
    
?>