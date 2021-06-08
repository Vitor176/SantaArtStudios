<?php
    session_start();
?>
<!doctype html>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Santa Art Studios | Área do usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                <a class="navbar-brand" href="./index.php"><img src="dashboard/images/LogoExtenso.png" alt="Logo"></a>
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
                        <h1><i class="fa fa-address-book-o" aria-hidden="true"></i> Meu Perfil</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li a href="#">Área do usuário</li>
                            <li class="active">Meu Perfil</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
  
        <div class="content mt-3">

        <form action="./php/upload.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header"><i class="fa fa-file-image-o" aria-hidden="true"></i> <strong>Foto do Usúario</strong></div>
                                            <div class="card-body card-block">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4> Seja Bem Vindo
                                                        <?php
                                                                echo $_SESSION['nomeCliente'].'<hr><h4> Atualize aqui seus dados:</h4>';      
                                                        ?>
                                                        </h4>
                                                    </div>
                                                </div>
                                                
                                                <div class="mx-auto d-block">
                                                <?php 
                                                   $nome_foto =  $_SESSION['fotoCliente'];
                                                   echo '<img style="height:170px;width:170px;display: block;margin-left: auto; margin-right: auto; border-radius: 30%;" src="./img/img_banco/'.$nome_foto.'" id="image" onchange="previewImage()" alt="User"><br>';
                                                ?>
                                                   
                                                    <center>
                                                    <input type="file" name="image"></label><br><br>
                                                        <button type="submit" class="btn btn-primary btn-sm center-anexe">
                                                            <i class="fa fa-paper-plane"></i> Enviar
                                                        </button></center>
                                                </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>


                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-header"><i class="fa fa-cog" aria-hidden="true"></i> <strong>Informações de Login</strong></div>
                                                <div class="card-body card-block">
                                                    <form action="./php/atualizadados.php" method="post" class="">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                                <input type="email" id="email" name="novoemail" placeholder="Troque seu Email" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                                                <input type="password" id="password" name="novasenha" placeholder="Troque sua Senha" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm"><i class="fa fa-cogs"></i> Trocar</button></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </form>



                <div class="col-lg-6">
                    <div class="card">
                    <form action="./php/AtualizaDadosAgencia.php" method="post">
                        <div class="card-header"><i class="fa fa-id-card" aria-hidden="true"></i> <strong>Dados da Empresa</strong></div>
                        <div class="card-body card-block">
                            <div class="form-group"><label for="company" class=" form-control-label">Nome:</label><input name="nome" type="text" id="company" placeholder="Informe o nome de sua Empresa" class="form-control"></div>
                                <div class="form-group"><label for="vat" class=" form-control-label">CNPJ:</label><input name="cnpj" type="text" id="vat" placeholder="Informe o CNPJ" class="form-control"></div>
                                    <div class="form-group"><label for="street" class=" form-control-label">Endereço:</label><input name="endereco" type="text" id="street" placeholder="Informe o Endereço" class="form-control"></div>
                                        <div class="row form-group">
                                            <div class="col-8">
                                                <div class="form-group"><label for="city" class=" form-control-label">Cidade:</label><input name="cidade" type="text" id="city" placeholder="Informe a Cidade" class="form-control"></div>
                                                </div>
                                                <div class="col-8">
                                                    
                                            <div class="form-group"><label for="postal-code" class=" form-control-label">CEP:</label><input name="cep" type="text" id="postal-code" placeholder="Código postal" class="form-control"></div>
                                            <div class="form-group"><label for="phone" class=" form-control-label">Telefone:</label><input name="telefone" type="tel" id="phone" placeholder="Informe um Telefone para contato" class="form-control"></div>
                                                    </div>
                                                </div>
                                                
                                        
                                            
                                            </div>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-paper-plane"></i> Enviar
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Limpar
                                                </button>
                                                </form>
                                            </div>
                                        </div>
                                     </div>
                                    
                                   
                                        <div class="col-lg-6">
                                            <div class="card">
                                            <form action="./php/atualizaDadosPessoais.php" method="post">
                                                <div class="card-header"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <strong>Dados Pessoais</strong></div>
                                                <div class="card-body card-block">
                                                    <div class="form-group"><label for="company" class=" form-control-label">Nome:</label><input name="nome" type="text" id="company" placeholder="Nome Completo" class="form-control"></div>
                                                        <div class="form-group"><label for="vat" class=" form-control-label">CPF:</label><input name="cpf" type="text" id="vat" placeholder="Informe seu CPF" class="form-control"></div>
                                                            <div class="form-group"><label for="street" class=" form-control-label">Endereço:</label><input name="endereco" type="text" id="street" placeholder="Informe seu Endereço" class="form-control"></div>
                                                                <div class="row form-group">
                                                                    <div class="col-8">
                                                                        <div class="form-group"><label for="city" class=" form-control-label">Cidade:</label><input name="cidade" type="text" id="city" placeholder="Informe sua Cidade" class="form-control"></div>
                                                                    </div>
                                                                        <div class="col-8">
                                                                            <div class="form-group"><label for="phone" class=" form-control-label">Telefone:</label><input name="telefone" type="tel" id="phone" placeholder="Informe um Telefone para contato" class="form-control"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                        <div class="card-footer">
                                                                            <button type="submit" class="btn btn-primary btn-sm">
                                                                                <i class="fa fa-paper-plane"></i> Enviar
                                                                            </button>
                                                                            <button type="reset" class="btn btn-danger btn-sm">
                                                                                <i class="fa fa-ban"></i> Limpar
                                                                            </button>
                                                                        </div>
                                                            </div>
                                                               
                                        </div>
                                        </form>  

                                                    </div>
                                                </div>

                                            
        </div>
    </div>
    

    <script src="dashboard/vendors/jquery/dist/jquery.min.js"></script>
    <script src="dashboard/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="dashboard/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dashboard/assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function previewImagem(){
            var imagem = document.querySelector('input[name=image]').files[0];
            var preview = document.querySelector('img')

            var reader = new FileReader();

            reader.onloadend = function(){
                preview.src = reader.result;
            }
            if(imagem){
                reader.readAsDataURL(imagem);
            }
            else{
                preview.src = "";
            }
        }
    </script>


    <script src="dashboard/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="dashboard/assets/js/dashboard.js"></script>
    <script src="dashboard/assets/js/widgets.js"></script>
    <script src="dashboard/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="dashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="dashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>

</body>

</html>
