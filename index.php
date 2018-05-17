<?php
session_start();
if(!$_SESSION) exit;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INDEX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'utils.php'; ?>
    <link rel="stylesheet" type="text/css" href="\parking-control\libs\boostrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="\parking-control\css\index.css">
    <script src="\parking-control\scripts\index.js"></script>
    
</head>
    <body>
        <div class="wrapper">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Estacionamento inteligente</h3>
                    <strong>EI</strong>
                </div>
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#vehicles-control" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-usd"></i>
                            Controle de Veículos
                        </a>
                        <ul class="collapse list-unstyled" id="vehicles-control">
                            <li><a href="#">Cadastro</a></li>
                            <li><a href="#">Consulta</a></li>
                            <li><a href="#">Exclusão</a></li>
                            <li><a href="#">Edição</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#custumer-control" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-user"></i>
                            Controle de Clientes
                        </a>
                        <ul class="collapse list-unstyled" id="custumer-control">
                            <li><a href="#">Cadastro</a></li>
                            <li><a href="#">Consulta</a></li>
                            <li><a href="#">Exclusão</a></li>
                            <li><a href="#">Edição</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#analytics" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-signal"></i>
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
                            <i class="glyphicon glyphicon-signal"></i>
                            Painel do Admnistrador
                        </a>
                        <ul class="collapse list-unstyled" id="admin">
                            <li><a href="\parking-control\modules\admin-panel\create-customers.php">Cadastrar Usuários</a></li>
                            <li><a href="#">Consultar Usuários</a></li>
                            <li><a href="#">Excluir Usuários</a></li>
                            <li><a href="#">Editar Usuários</a></li>
                            <li><a href="#">Permissões do Usuário</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-send"></i>
                            Contato
                        </a>
                    </li>
                </ul>

            </nav>
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Menu</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#"> <i class="glyphicon glyphicon-log-out"></i>Sair</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <?php
                    $Url[1] = (empty($Url[1]) ? null : $Url[1]);
                    if(file_exists('C:/xampp/htdocs/parking-control/modules/admin-panel/'.$Url[0].'.php'))
                       require 'C:/xampp/htdocs/parking-control/modules/admin-panel/'.$Url[0].'.php';
                ?>
               <!-- <h2>Cadastrar Usuário</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
-->
            </div>
        </div>
    </body>
</html>
