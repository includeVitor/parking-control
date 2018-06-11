<form id="form-create-users">
    <link rel="stylesheet" type="text/css" href="\parking-control\css\create-users.css">
    <script src="\parking-control\scripts\create-users.js"> </script>
        <h2 class="text-center"> Cadastrar Usuários </h2>
        <hr>
        <div id="succeed">
            <p>Usuário cadastrado com sucesso</p>
        </div>
        <div id="failed">
            <p>Não foi possível cadastrar o usuário</p>
        </div>
        <div id="failconn">
            <p>Não foi possível conectar</p>
        </div>
        <input type="email" id="email" class="form-control mt-2" placeholder="Email" maxlength="100" required>
        <input type="text" id="name" class="form-control mt-2" placeholder="Nome" maxlength="30" required>
        <input type="password" id="password" class="form-control mt-2" placeholder="Senha" maxlength="8" required>
        <input type="text" id="cpf" class="form-control mt-2" placeholder="Cpf" maxlength="14" required>        
        <button type="button" class="btn btn-warning mt-2" id="cancel-user"> Cancelar </button>
        <button type="submit" class="btn btn-primary mt-2" id="create-user"> Cadastrar</button>
</form>
