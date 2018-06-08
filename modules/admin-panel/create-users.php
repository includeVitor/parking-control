<div id="div-create-users">
    <link rel="stylesheet" type="text/css" href="\parking-control\css\create-users.css">
    <script src="\parking-control\scripts\create-users.js"> </script>
        <h2> Cadastrar Usuários </h2>
        <div class="column">
            <div class="input-group">
                <span class="input-group-addon" id="user-name">NOME</span>
                <input type="text" name="user-name" class="form-control" aria-describedby="user-name">
            </div>
        </div>

        <div class="input-group">
            <span class="input-group-addon" id="user-password">SENHA</span>
            <input type="text" name="user-password" class="form-control" aria-describedby="user-password">
        </div>

        <div class="input-group">
            <span class="input-group-addon" id="user-cpf">CPF</span>
            <input type="text" name="user-cpf" class="form-control" aria-describedby="user-cpf">
        </div>
        
        <div class="input-group">
            <span class="input-group-addon" id="user-phone">TELEFONE</span>
            <input type="text" name="user-phone" class="form-control" aria-describedby="user-phone">
        </div>
        
        <div class="row">
            <div class="col-lg-3">
                <div class="input-group">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
                <input type="text" class="form-control" aria-label="...">
                </div>
            </div>
        </div>

        <button class="btn btn-warning" id="cancel-user"> Cancelar </button>
        <button class="btn btn-primary" id="create-user"> Cadastrar</button>
        <input type="hidden" name="event" id="event" >
</div>