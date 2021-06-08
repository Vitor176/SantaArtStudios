<?php
    include('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;
    $comando = "";
    $comando = "SELECT * FROM Tb_Cliente WHERE Email = '$email'";
    $buscaBanco = mysqli_query($conexao,$comando);
    $linhas = mysqli_num_rows($buscaBanco);
    if($linhas > 0){
    echo "<script>alert('Este Usuário já Existe!')</script>";
    echo "<script>window.location='./../login.html'</script>";
    exit();
    }
    else{
    $comando = "INSERT INTO Tb_Cliente(Email,Nome,Senha,Foto,Online)
    VALUES('$email'
          ,'$nome'
          ,'$senha'
          ,'user-blank.png'
          ,false)";
          $insereBanco = mysqli_query($conexao,$comando);
          echo "<script>alert('Parabéns Usuário Cadastrado com Sucesso!!')</script>";
          echo "<script>window.location='./../login.html'</script>";
}

?>