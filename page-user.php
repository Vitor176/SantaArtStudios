<?php
                            session_start();
?>
<!doctype html>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Santa Art Studios | Área do Usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href="dashboard/images/favicon.ico">

    <link rel="stylesheet" href="dashboard/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="dashboard/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="dashboard/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="dashboard/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="dashboard/vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="dashboard/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>



    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php"><img src="dashboard/images/LogoExtenso.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="page-user.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="perfil.php"> <i class="menu-icon fa fa-user-circle"></i>Meu Perfil</a>
                    </li>
                    <li>
                        <a href="chat.php"> <i class="menu-icon fa fa-comments"></i>Atendimento Online</a>
                    </li>
                    <li>
                        <a href="market.php"> <i class="menu-icon fa fa-credit-card-alt"></i>Market</a>
                    </li>
                    <li>
                        <a href="./php/logout.php"><i class="menu-icon fa fa-sign-out"></i>Sair</a> 
                    </li>
                </ul>
            </div>
        </nav>
    </aside>


    <div id="right-panel" class="right-panel">

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>
                        <i class="fa fa-user-circle" aria-hidden="true"></i> Área do usuário</h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="content mt-3">

            <div class="card">
                <div class="card-header">
                    <h4> Seja Bem Vindo 
                       <?php
                            echo $_SESSION['nomeCliente']."!";
                            echo "</div>";
                            echo "</h4><br>";
                                $nome_foto = $_SESSION['fotoCliente'];
                                include ('./php/conexao.php');
                                $idCliente = $_SESSION['idCliente'];
                                //Começo da pagina
                                echo "<div class='mx-auto d-block'>   
                                <img id='teste' src='./img/img_banco/$nome_foto' alt='User' style='height:170px;width:170px;display: block;margin-left: auto; margin-right: auto; border-radius: 30%;'><br>
                                </div>";
                                echo "</div>";
                    
                            //Listas de sites do cliente
                            $comando = "";
                            $comando = "SELECT * FROM Tb_Site WHERE 1 = 1 AND IdCliente = $idCliente";
                            $buscaBanco = mysqli_query($conexao,$comando);
                            $linhas = mysqli_num_rows($buscaBanco);
                            $nomesite = "";
                             while($dados = mysqli_fetch_array($buscaBanco))
                             { 
                                $estagioSite = $dados['IdStatusSite'];
                                $nomesite = $dados['NomeSite'];
                                $reclusao = $dados['MotivoSiteRecusado'];
                                // echo $estagioSite <= 3 ? 'progtrckr-done': 'progtrckr-todo';
                                if($estagioSite == 1)
                                {
                                    $html = 
                                    '<div style="text-align:center;" class="card">
                                    <div class="card-header">
                                        <h4>Projeto Requisitado: '.$nomesite.' </h4></div>
            
                                            <ol class="progtrckr" data-progtrckr-steps="4">
                                            <li class="progtrckr-done">Em Análise</li>
                                            <li class="progtrckr-todo">Efetue Pagamento</li>
                                            <li class="progtrckr-todo">Pagamento Efetuado</li>
                                            <li class="progtrckr-todo">Projeto Entregue</li>
                                            </ol><br>
                                        </div>';
                                }
                                if($estagioSite == 2)
                                {
                                    $html = 
                                    '<div style="text-align:center;" class="card">
                                    <div class="card-header">
                                        <h4>Projeto Requisitado: '.$nomesite.' </h4></div>
            
                                            <ol class="progtrckr" data-progtrckr-steps="4">
                                            <li class="progtrckr-done">Em Análise</li>
                                            <li class="progtrckr-done">Efetue Pagamento</li>
                                            <li class="progtrckr-todo">Pagamento Efetuado</li>
                                            <li class="progtrckr-todo">Projeto Entregue</li>
                                            </ol><br>
                                            </div>';
                                }
                                if($estagioSite == 3)
                                {
                                    $html = 
                                    '<div style="text-align:center;" class="card">
                                    <div class="card-header">
                                        <h4>Projeto Requisitado: '.$nomesite.' </h4></div>
            
                                            <ol class="progtrckr" data-progtrckr-steps="4">
                                            <li class="progtrckr-done">Em Análise</li>
                                            <li class="progtrckr-done">Efetue Pagamento</li>
                                            <li class="progtrckr-done">Pagamento Efetuado</li>
                                            <li class="progtrckr-todo">Projeto Entregue</li>
                                            </ol><br>
                                            </div>';
                                }
                                if($estagioSite == 4)
                                {
                                    
                                    $html = '<div style="text-align:center;" class="card">
                                    <div class="card-header">
                                        <h4>Projeto Requisitado: '.$nomesite.' </h4></div>
            
                                            <ol class="progtrckr" data-progtrckr-steps="4">
                                            <li class="progtrckr-done">Em Análise</li>
                                            <li class="progtrckr-done">Efetue Pagamento</li>
                                            <li class="progtrckr-done">Pagamento Efetuado</li>
                                            <li class="progtrckr-done">Projeto Entregue</li>
                                        </ol><br>
                                    </div>';

                                }
                                if($estagioSite == 5)
                                {
                                    $html = '<div style="text-align:center;" class="card">
                                    <div class="card-header">
                                        <h4>Projeto Requisitado: '.$nomesite.' </h4><br><img style="width:10%;text-align:center;" src="./img/site_recusado.png" alt="cancel">'.
                                        '<div class="card-header">'.
                                        '<h4>Motivo da Solicitação Rejeitada :</h4><br><br>'.
                                        '<p>'.$reclusao.'</p>'.
                                        '</div></div></div>';

    
                                }
                                 echo $html;

                             }

?>
                                    


                                                </div>
                                            </div>        
    <script src="dashboard/vendors/jquery/dist/jquery.min.js"></script>
    <script src="dashboard/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="dashboard/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dashboard/assets/js/main.js"></script>

    <script src="dashboard/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="dashboard/assets/js/dashboard.js"></script>
    <script src="dashboard/assets/js/widgets.js"></script>
    <script src="dashboard/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="dashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="dashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>

</body>

</html>
