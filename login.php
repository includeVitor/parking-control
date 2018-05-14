<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="\parking-control\css\login.css">
    <?php include "utils.php"; ?>
    
</head>
<body>
    <div class="container">
        <section class="login">
                <form method="post" action ="\parking-control\auth.php" >
                    <input type="text" class="form-control input-lg" name="user" placeholder="Usuário" required>
                    <br>
                    <input type="password" class="form-control input-lg" name="password" placeholder="Senha" required>
                    <br>
                    <button class="bnt btn-primary btn-lg btn-block">Entrar</button>
                </form>
        </section>
    </div>
</body>
</html>