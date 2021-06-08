<!doctype html>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Santa Art Studios | Área do Desenvolvedor</title>
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

<?php
    session_start();
?>

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
                    <h1><i class="fa fa-terminal" aria-hidden="true"></i> Área do Desenvolvedor</h1>
                    </div>
                </div>
            </div>

        </div>
  
        <div class="content mt-3">

        <form action="./php/uploadDev.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header"><i class="fa fa-file-image-o" aria-hidden="true"></i> <strong>Foto do Desenvolvedor</strong></div>
                        <div class="card-body card-block">
                        <div class="card">
                <div class="card-header">
                <h4> Seja Bem Vindo
                                                        <?php
                                                                

                                                                echo $_SESSION['nomeDesenvolvedor'].'<hr><h4> Atualize aqui seus dados:</h4>';
                                                                
                                                        ?>
                                                        </h4>
                                                    </div>
                                                </div>
        
                                                <div class="mx-auto d-block">
                                                    <?php
                                                    $nova_foto = $_SESSION['fotoDesenvolvedor'];
                                                    echo "<img style='height:170px;width:170px;display: block;margin-left: auto; margin-right: auto; border-radius: 30%;' src='./img/img_banco_dev/$nova_foto' id='image' onchange='previewImage()' alt='User'><br>";?>
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
                                                
                                                <div class="card-header"><i class="fa fa-address-card" aria-hidden="true"></i> <strong>Informações do Desenvolvedor</strong></div>
                                                <div class="card-body card-block">
                                                    <form action="./php/uploadDadosDev.php" method="post" class="">
                                                                                                                <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon"><i class="fa fa-user-o"></i></div>
                                                                <input type="name" id="name" name="nome" placeholder="Troque seu Nome" class="form-control">
                                                            </div>
                                                        </div>
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
