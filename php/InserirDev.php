<?php
    include('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;
    $comando = "";
    $comando = "SELECT * FROM Tb_Desenvolvedor WHERE Email = '$email'";
    $buscaBanco = mysqli_query($conexao,$comando);
    $linhas = mysqli_num_rows($buscaBanco);
    if($linhas > 0){
    echo "<script>alert('Este Usuário já Existe!')</script>";
    echo "<script>window.location='./../Logindev.html'</script>";
    exit();
    }
    else{
    $comando = "INSERT INTO Tb_Desenvolvedor(Email,Nome,Senha,Foto,Online)
    VALUES('$email'
          ,'$nome'
          ,'$senha'
          ,'user-blank.png'
          ,false)";
          $insereBanco = mysqli_query($conexao,$comando);
          echo "<script>alert('Parabéns Usuário Cadastrado com Sucesso!!')</script>";
          echo "<script>window.location='./../Logindev.html'</script>";
}

?>