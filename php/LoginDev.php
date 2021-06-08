<?php
    include ('./conexao.php');
    $email = $_POST["email"];
    $senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;
    $comando = "";
    $comando = "SELECT * FROM Tb_Desenvolvedor WHERE email = '$email' and senha = '$senha'";
    $clientes_Query = mysqli_query($conexao, $comando);
    $linhas = mysqli_num_rows($clientes_Query);
    $nome = '';
    $email = '';
    $foto = '';
    $online = false;
     // Percorre a lista e cria um dado
     while ($dados= mysqli_fetch_array($clientes_Query))
     {
         $email =   $dados['Email'];
         $id =      $dados['Id'];
         $nome =    $dados['Nome'];
         $foto =    $dados['Foto'];
     }

     if($nome != ''){
         $online = true;
     }
         if($online == true){
             if (!isset($_SESSION['nomeDesenvolvedor'])) {//Verificar se a sessão não já está aberta.
                 session_start();
               }
             $_SESSION['nomeDesenvolvedor'] = $nome;
             $_SESSION['idDesenvolvedor'] = $id;
             $_SESSION['emailDesenvolvedor'] = $email;
             $_SESSION['fotoDesenvolvedor'] = $foto;
             $_SESSION['DesenvolvedorOnline'] = $online;
             echo "<script>"
             . "window.location='./../page-user-dev.php'"
             . "</script>"; 
         }
         if($linhas == 0){
            header('location: ./../login.html');
         }
?>