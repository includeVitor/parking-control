<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estacionamento Inteligente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "utils.php"; ?>
    <link rel="stylesheet" type="text/css" href="\parking-control\libs\boostrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="\parking-control\css\login.css">
    <script src="\parking-control\scripts\login.js"></script>   
</head>
<body>
    <form class="form-signin" id="form-signin">
        <h1 class="text-center font-weight-light">Entrar</h1>
        <input type="email" class="form-control" placeholder="Endereço de email" required>
        <input type="password" class="form-control" placeholder="Senha" required>
        <button type="submit" class="btn btn-primary btn-block btn-lg">Entrar</button>
        <div id="loading"></div>
    </form>
</body>
</html>