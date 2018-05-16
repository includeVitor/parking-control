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
    
</head>
<body>
    <header>
        <a id="glyphUser">
            <i class="glyphicon glyphicon-user"></i>
        </a>
        <a id="glyphLogOut">
          <i class="glyphicon glyphicon-log-out"></i>
          <label for="get-out">Sair</label>
        </a>
    </header>
    <label for="welcome">Bem-vindo, "O sucesso normalmente vem para quem está ocupado demais para procurar por ele" – Henry David Thoreau </label>

    <footer>
    </footer>
</body>
</html>