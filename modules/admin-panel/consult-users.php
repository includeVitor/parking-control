<form id="form-consult-users">
    <link rel="stylesheet" type="text/css" href="\parking-control\css\consult-users.css">
    <script src="\parking-control\scripts\consult-user.js"></script>
    <h2 class="text-center">Consultar Usuários</h2>
    <hr>
    <input type="text" id="cpf" class="form-control" placeholder="Cpf">
    <input type="text" id="name" class="form-control mt-2" placeholder="Nome">
    <button type="button" class="btn btn-warning mt-2" id="cancel-user"> Cancelar </button>
    <button class="btn btn-primary mt-2" id="consult-user"> Consultar </button>
</form>
<table class="table table-striped mt-2" id="table-consult">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Cpf</th>            
        </tr>
    </thead>
</table>
<div class="modal fade" id="edit-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edição</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div id="succeed">
            <p>Usuário alterado com sucesso</p> 
        </div>
        <div id="failed">
            <p>Não foi possível editar o usuário</p> 
        </div>
        <div id="failconn">
            <p>Falha na conexão</p> 
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Id</span>
            </div>
            <input type="text" id="modal-id" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" disabled required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Email</span>
            </div>
            <input type="email" id="modal-email" class="form-control" aria-label="Default" placeholder="Email" maxlength="100" aria-describedby="inputGroup-sizing-default" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Nome</span>
            </div>
            <input type="text" id="modal-name" class="form-control" aria-label="Default" placeholder="Nome" maxlength="30" aria-describedby="inputGroup-sizing-default" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Cpf</span>
            </div>
            <input type="text" id="modal-cpf" class="form-control" aria-label="Default" placeholder="Email" maxlength="14" aria-describedby="inputGroup-sizing-default" required>
        </div>            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" id="update-user" >Salvar alterações</button>
      </div>
    </div>
  </div>
</div>