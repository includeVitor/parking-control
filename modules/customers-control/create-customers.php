<form id="form-create-customers">
    <link rel="stylesheet" type="text/css" href="\parking-control\css\create-customers.css">
    <script src="\parking-control\scripts\create-customers.js"> </script>
        <h2 class="text-center"> Cadastrar Clientes</h2>
        <hr>
        <div id="succeed">
            <p>Cliente cadastrado com sucesso</p>
        </div>
        <div id="failed">
            <p>Não foi possível cadastrar o cliente</p>
        </div>
        <div id="failconn">
            <p>Não foi possível conectar</p>
        </div>
        <input type="email" id="email" class="form-control mt-2" placeholder="Email" maxlength="100" required>
        <input type="text" id="name" class="form-control mt-2" placeholder="Nome" maxlength="30" required>
        <input type="text" id="cpf" class="form-control mt-2" placeholder="Cpf" maxlength="14" required>
        <button id="add-plate-number" class="btn btn-primary mt-2"><i class="fas fa-plus"></i></button>
        <input type="text" id="plate-number1" class="form-control mt-2" placeholder="Número da placa" maxlength="8" required>        
        <div id="div-plate-number">
        </div>
        <button type="button" class="btn btn-warning mt-2" id="cancel-customqer"> Cancelar </button>
        <button type="submit" class="btn btn-primary mt-2" id="create-customer"> Cadastrar</button>
</form>
