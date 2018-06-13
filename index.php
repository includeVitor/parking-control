<?php
session_start();
if(!$_SESSION) exit;
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estacionamento Inteligente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'utils.php'; ?>
    <link rel="stylesheet" type="text/css" href="\parking-control\libs\fontawesome\web-fonts-with-css\css\fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="\parking-control\libs\boostrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="\parking-control\css\index.css">
    <script src="\parking-control\scripts\index.js"></script>
    
</head>
    <body>
        <div class="wrapper">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3><a href="\parking-control\"> Estacionamento inteligente </a></h3>
                    <strong>EI</strong>
                </div>
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#vehicles-control" data-toggle="collapse" aria-expanded="false">
                            <i class="fas fa-car fa-lg"></i>
                            Controle de Vagas
                        </a>
                        <ul class="collapse list-unstyled" id="vehicles-control">
                            <li><a href="\parking-control\create-vacancys">Cadastro</a></li>
                            <li><a href="\parking-control\consult-vacancys">Consulta</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#customers-control" data-toggle="collapse" aria-expanded="false">
                            <i class="fas fa-users fa-lg"></i>
                            Controle de Clientes
                        </a>
                        <ul class="collapse list-unstyled" id="customers-control">
                            <li><a href="\parking-control\create-customers">Cadastro</a></li>
                            <li><a href="\parking-control\consult-customers">Consulta</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#analytics" data-toggle="collapse" aria-expanded="false">
                            <i class="fas fa-chart-bar fa-lg"></i>
                            Analytics
                        </a>
                        <ul class="collapse list-unstyled" id="analytics">
                            <li><a href="#">Gráfico de Clientes</a></li>
                            <li><a href="#">Gráfico de Veículos</a></li>
                            <li><a href="#">Gráfico Clientes X Veículos</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#admin" data-toggle="collapse" aria-expanded="false">
                            <i class="fas fa-lock fa-lg"></i>
                            Painel do Admin
                        </a>
                        <ul class="collapse list-unstyled" id="admin">
                            <li><a href="\parking-control\create-users">Cadastrar</a></li>
                            <li><a href="\parking-control\consult-users">Consultar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-paper-plane fa-lg"></i>
                            Contato
                        </a>
                    </li>
                </ul>

            </nav>
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-primary navbar-btn">
                                <i class="fas fa-bars fa-lg"></i>
                                <span>Menu</span>
                            </button>
                        </div>
                        <div class="navbar-header">
                            <button type="button" id="leave" class="btn btn-danger navbar-btn" >
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span>Sair</span>
                            </button>
                        </div>
                    </div>
                </nav>
                <div class="index-content">
                    <?php
                        $Url[1] = (empty($Url[1]) ? null : $Url[1]);
                        
                        if(file_exists('C:/xampp/htdocs/parking-control/modules/admin-panel/'.$Url[0].'.php'))
                            require 'C:/xampp/htdocs/parking-control/modules/admin-panel/'.$Url[0].'.php';

                        if(file_exists('C:/xampp/htdocs/parking-control/modules/vacancy-control/'.$Url[0].'.php'))
                            require 'C:/xampp/htdocs/parking-control/modules/vacancy-control/'.$Url[0].'.php'; 
                        
                        if(file_exists('C:/xampp/htdocs/parking-control/modules/customers-control/'.$Url[0].'.php'))
                            require 'C:/xampp/htdocs/parking-control/modules/customers-control/'.$Url[0].'.php';   

                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
