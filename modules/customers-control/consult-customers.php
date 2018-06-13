<form id="form-consult-customers">
    <link rel="stylesheet" type="text/css" href="\parking-control\css\consult-customers.css">
    <script src="\parking-control\scripts\consult-customers.js"></script>
    <h2 class="text-center">Consultar Clientes</h2>
    <hr>
    <input type="text" id="cpf" class="form-control" placeholder="Cpf">
    <input type="text" id="name" class="form-control mt-2" placeholder="Nome">
    <button type="button" class="btn btn-warning mt-2" id="cancel-user"> Cancelar </button>
    <button class="btn btn-primary mt-2" id="consult-user"> Consultar </button>
</form>
<div id="delete-succeed">
    <p class="text-center mt-2">Cliente excluido com sucesso</p>
</div>
<div id="delete-failed">
    <p class="text-center mt-2">Falha na exclusão dos Clientes</p>
</div>
<div id="delete-failconn">
    <p class="text-center mt-2">Falha na conexão</p>
</div>
<table class="table table-striped mt-2" id="table-consult">
    <thead>
        <tr>
            <th scope="col">#</th>
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
            <p>Cliente alterado com sucesso</p> 
        </div>
        <div id="failed">
            <p>Não foi possível editar o Cliente</p> 
        </div>
        <div id="failconn">
            <p>Falha na conexão</p> 
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Id</span>
            </div>
            <input type="text" id="modal-id" class="form-control"  disabled required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Email</span>
            </div>
            <input type="email" id="modal-email" class="form-control" placeholder="Email" maxlength="100" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Nome</span>
            </div>
            <input type="text" id="modal-name" class="form-control" placeholder="Nome" maxlength="30" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Cpf</span>
            </div>
            <input type="text" id="modal-cpf" class="form-control" placeholder="Email" maxlength="14" required>
        </div>            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" id="update-user" >Salvar alterações</button>
      </div>
    </div>
  </div>
</div>