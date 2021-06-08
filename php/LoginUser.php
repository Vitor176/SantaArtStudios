<?php
    include ('conexao.php');
    $email = $_POST["email"];
    $senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;
    $comando = "";
    $comando = "SELECT * FROM Tb_Cliente WHERE email = '$email' and senha = '$senha'";
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
             if (!isset($_SESSION['nomeCliente'])) {//Verificar se a sessão não já está aberta.
                 session_start();
               }
             $_SESSION['nomeCliente'] = $nome;
             $_SESSION['idCliente'] = $id;
             $_SESSION['emailCliente'] = $email;
             $_SESSION['fotoCliente'] = $foto;
             $_SESSION['clienteOnline'] = $online;
             echo "<script>"
             . "window.location='./../page-user.php'"
             . "</script>"; 
         }
         if($linhas == 0){
            header('location: ./../login.html');
         }


   
         


?>