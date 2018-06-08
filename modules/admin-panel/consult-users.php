<?php

include "C:\\xampp\htdocs\parking-control\class\user.php";

if(isset($_POST['event']) && $_POST['event'] == 2){

    $user = new User();
    $data = $user->select($_POST['user-name'], $_POST['user-cpf']);
    if(!$data){
        echo "<script>alert('Não há resultados para essa pesquisa ! ); </script>";
    }

}
if(isset($_POST['event']) && $_POST['event'] == 3){
    echo "<script>alert('entrei aqui'); </script>";
    $user = new User();
    $updated = $user->update($_POST['id'], $_POST['name'], $_POST['cpf'], $_POST['phone'], $_POST['access']);
    if($updated)
        echo "<script>alert('Registro Atualizado com Sucesso')</script>";
    else
        echo "<script>alert('Falha na atualização do registro')</script>";
}



?>

<form method="post">
    <div class="div-consult-user">
        <link rel="stylesheet" type="text/css" href="\parking-control\css\consult-users.css">
        <script src="\parking-control\scripts\consult-user.js"></script>
        <h2>Consultar Usuários</h2>
        <hr>
        <div class="input-group col-xs-5">
            <span class="input-group-addon" id="user-name">NOME COMPLETO</span>
            <input type="text" name="user-name" name="user-name" class="form-control" aria-describedby="user-name">
        </div>
        <br>
        <div class="input-group col-xs-5">
            <span class="input-group-addon" id="user-cpf">CPF</span>
            <input type="text" name="user-cpf" name="user-cpf" class="form-control" aria-describedby="user-cpf">
        </div>
    </div>
    <br>
    <button class="btn btn-primary" id="consult-user"> Consultar </button>
    <input type="text" name="event" id="event">
    <input type="hidden" name="id" id="id">
    <input type="hidden" name="name" id="name">
    <input type="hidden" name="cpf" id="cpf">
    <input type="hidden" name="phone" id="phone">
    <input type="hidden" name="access" id="access">
    <tr>
    <?php if(isset($data)){ ?>
    <table class="table table-hover">
        <thead>
            <tr>
                
                <td><b> ID </b></td>
                <td><b> NOME </b></td>
                <td><b> CPF </b></td>
                <td><b> TELEFONE </b></td>
                <td><b> ACESSO </b></td>
                <td><b> CONTROLES </b></td>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $d){ ?>
                <tr contenteditable="true">
                    <td ><?php echo $d['id']; ?></td>
                    <td ><?php echo $d['name']; ?></td>
                    <td ><?php echo $d['cpf']; ?></td>
                    <td ><?php echo $d['phone']; ?></td>
                    <td ><?php echo $d['access']; ?></td>
                    <td>
                        <button class="btn btn-primary" onClick="$('#event').val(3);$('#id').val(<?php echo $d['id']?>);$('#name').val(<?php echo $d['name'];?>);$('#cpf').val(<?php echo $d['cpf']?>);$('#phone').val(<?php echo $d['phone']?>);$('access').val(<?php echo $d['access']?>)">
                            <i class="glyphicon glyphicon-ok"></i>
                        </button>
                        <button class="btn btn-primary">
                            <i class="glyphicon glyphicon-remove"></i>
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } ?>
</form>