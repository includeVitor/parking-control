<form id="form-consult-vacancys">
    <link rel="stylesheet" type="text/css" href="\parking-control\css\consult-vacancys.css">
    <script src="\parking-control\scripts\consult-vacancys.js"></script>
    <h2 class="text-center">Consultar Vagas</h2>
    <hr>
    <div class="input-group mt-2">
        <div class="input-group-prepend">
            <span class="input-group-text" >Número da Placa</span>
        </div>
        <input type="text" class="form-control" id="plate-number">
    </div>


    <button type="button" class="btn btn-warning mt-2" id="cancel-user"> Cancelar </button>
    <button class="btn btn-primary mt-2" id="consult-user"> Consultar </button>
</form>
<div id="delete-succeed">
    <p class="text-center mt-2">Vaga excluida com sucesso</p>
</div>
<div id="delete-failed">
    <p class="text-center mt-2">Falha na exclusão das vagas</p>
</div>
<div id="delete-failconn">
    <p class="text-center mt-2">Falha na conexão</p>
</div>
<table class="table table-striped mt-2" id="table-consult">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id</th>
            <th scope="col">Número da Placa</th>          
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
            <p>Vaga alterada com sucesso</p> 
        </div>
        <div id="failed">
            <p>Não foi possível editar a vaga</p> 
        </div>
        <div id="failconn">
            <p>Falha na conexão</p> 
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Id</span>
            </div>
            <input type="text" id="modal-id" class="form-control" disabled required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Número da Placa</span>
            </div>
            <input type="text" id="modal-plate-number" class="form-control"  placeholder="Número da placa" maxlength="8" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Data de Entrada</span>
            </div>
            <input type="text" id="modal-entry-date" class="form-control" maxlength="10" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Data de Saída</span>
            </div>
            <input type="text" id="modal-exit-date" class="form-control" maxlength="10" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Horário de Entrada</span>
            </div>
            <input type="text" id="modal-entry-time" class="form-control" maxlength="8" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Horário de Saída</span>
            </div>
            <input type="text" id="modal-exit-time" class="form-control" maxlength="8" required>
        </div>  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" id="update-vacancy" >Salvar alterações</button>
      </div>
    </div>
  </div>
</div>