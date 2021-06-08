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
                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i> Market</h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="content mt-3">

        <h4 style="text-align:center;">Solicitar Cadastro de Projeto no Sistema</h4><br>
<form action="./php/cadastroSite.php" method="post" class="">
<div class="card">
                            <div class="card-header">
                                <strong class="card-title"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Selecione o Serviço</strong>
                            </div>
                            
                            <div class="card-body">
                            <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">Nome do Projeto:</div>
                                                                        <input type="text" id="username3" name="nomeSite" class="form-control">
                                                                        
                                                                    </div>
                                                                </div>
                            <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="multiple-select" class=" form-control-label"><b>Para Selecionar mais de uma opção, segure CRTL no teclado!</b></label></div>
                                                                    <div class="col col-md-9">
                                                                        <select multiple name="servicos[]" id="multiple-select" class="form-control">
                                                                            <option id='valor1' value="Web Designer">Web-designer</option>
                                                                            <option id='valor2' value="Design Gráfico">Design Gráfico </option>
                                                                            <option id='valor3' value="Edição e Vetorização de Imagens">Edição e Vetorização de Imagens</option>
                                                                            <option id='valor4' value="Otimização de Sites">Otimização de Sites</option>
                                                                            <option id='valor 5' value="Marketing Digital">Marketing Digital</option>
                                                                            <option id='valor 6' value="Serviços Web">Serviços Web</option>
                                                                        </select>
                                                                    </div>
                                                                </div>




                                                                <div class="form-actions form-group"><button id="atualizar" type="submit" class="btn btn-primary btn-sm center-anexe">
                                                            <i class="fa fa-cart-arrow-down"></i> Adicionar
                                                        </button></div>
                                                        </form>
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Formas de Pagamento Aceitos</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            <div class="form-group text-center">
                                                <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-cc-paypal fa-2x"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-cc-visa fa-2x"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                                                    <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li>
                                                </ul>
                                            </div>
                                                <div class="form-group has-success">
                                                    <label for="cc-name" class="control-label mb-1">Nome</label>
                                                    <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Por Favor entre com seu Nome Correto!" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="cc-exp" class="control-label mb-1">CPF</label>
                                                            <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Por Favor entre com o Número de CPF Correto!" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                        <span id="payment-button-amount">Pagar</span>
                                                    </button>
                                                </div>
                                        </form>
                                    </div>
                                </div>


                                        </div>           
</div>   
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
