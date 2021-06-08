<?php
    include ('./php/util.php');
    session_start();
    

?>
<!doctype html>


<html class="no-js" lang="pt-br">

<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Santa Art Studios | Area do Desenvolvedor</title>
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
                        <a href="page-user-dev.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="perfilDev.php"> <i class="menu-icon fa fa-user-circle"></i>Meu Perfil</a>
                    </li>
                    <li>
                        <a href="chatdev.html"> <i class="menu-icon fa fa-comments"></i>Chat do Desenvolvedor</a>
                    </li>
                    <li>
                        <a href="pedidos.php"> <i class="menu-icon fa fa-check"></i>Pedidos</a>
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
                        <i class="fa fa-terminal" aria-hidden="true"></i> Área do Desenvolvedor</h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="content mt-3">

            <div class="card">
                <div class="card-header">
                <h4><i class="fa fa-id-badge" aria-hidden="true"></i> Seja Bem Vindo                 <?php
                        echo $_SESSION['nomeDesenvolvedor']."!";
                        echo "</h4><br>";
                        $nome_foto = $_SESSION['fotoDesenvolvedor'];
                        include ('./php/conexao.php');
                        $idCliente = $_SESSION['idDesenvolvedor'];
                        //Começo da pagina
                        echo "<div class='mx-auto d-block'>   
                        <img id='teste' src='./img/img_banco_dev/$nome_foto' alt='User' style='height:170px;width:170px;display: block;margin-left: auto; margin-right: auto; border-radius: 30%;'><br>
                        </div>";
                        



                ?></h4>
                </div>
                </div>

                <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Selecione o Pedido</strong>
                            </div>
                            <div class="card-body">
                            <form action="./php/AtualizaPedido.php" method="POST">
                                <select name="SiteSelecionado" id="idSiteSelecionado" class="form-control" tabindex="1">
                                    <?php 
                                            include ('conexao.php');
                                            $options = "";
                                            $comando = "";
                                            $comando = "SELECT * FROM Tb_Site WHERE 1 = 1";
                                            $buscaBanco = mysqli_query($conexao,$comando) ;
                                            $linhas = mysqli_num_rows($buscaBanco);
                                            $idSite = 0;
                                            $nomesite = "";
                                            $idstatussite = 0;
                                            $idcliente = 0;

                                            while($dados = mysqli_fetch_array($buscaBanco)){ 
                                                $idSite = $dados['Id'];
                                                $nomesite = $dados['NomeSite'];
                                                $idstatussite = $dados['IdStatusSite'];
                                                $idcliente =  $dados['IdCliente'];  
                                                $servicos = $dados['ServicosPedidos'];
                                                $siteReferencia = $dados['SiteReferencia'];
                                                $mensagem = $dados['MotivoSiteRecusado'];
                                                $options = $options."  <option value='".$idSite."'>".$nomesite."</option>  ";
                                            }
                                            echo charset_decode_utf_8($options);
                                    
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="card">
                            
                            <div class="card-header">
                                <h4><i class="fa fa-refresh" aria-hidden="true"></i> Atualize Status do Pedido</h4>
                            </div>
                            <div class="card-body">
                            <select name="idStatus" id="select" class="form-control">

                                <?php 
                                    $comando = "";
                                    $comando = "SELECT * FROM Tb_StatusSite WHERE 1 = 1";
                                    $buscaBanco = mysqli_query($conexao,$comando);
                                    $linhas = mysqli_num_rows($buscaBanco);
                                    $id = 1;
                                    $descricao = "";
                                    $options = "  ";
                                    while($dados = mysqli_fetch_array($buscaBanco)){
                                        $id = $dados['Id'];
                                        $descricao = $dados['Descricao'];
                                        $options = $options.
                                        "
                                        <option name='idStatusSelecionado' id='idStatusSelecionado' value=".$id.">".
                                            "<li class='nav-item'>".
                                                "<a class='nav-link active' id='ills-home-tab' data-toggle='pill' href='#pills-home' role='tab' aria-controls='pills-home' aria-selected='true'>$descricao</a>".
                                            "</li>".
                                        "</option>";
                                    }
                                    echo $options;

                                ?>

                                
                            </select>
                                </div>
                                <div class="card-body">
   
                                <h4><i class="fa fa-pencil-square" aria-hidden="true"></i> Justificativa Para Rejeição de Site</h4></div>
                                <div class="card-body">
  <textarea id="" class="md-textarea form-control" rows="3" name="mensagem"></textarea><br>

                            <button id="atualizar" onclick="AtivaMensagem()" type="submit" class="btn btn-primary btn-sm center-anexe">
                                                            <i class="fa fa-paper-plane"></i> Atualizar
                                                        </button></div>
                                                        </div>
                                                        </form>


                        
           


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
