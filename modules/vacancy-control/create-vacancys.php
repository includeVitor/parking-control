<form id="form-create-vacancys">
    <link rel="stylesheet" type="text/css" href="\parking-control\css\create-vacancys.css">
    <script src="\parking-control\scripts\create-vacancys.js"> </script>
        <h2 class="text-center"> Cadastrar Vagas </h2>
        <hr>
        <div id="succeed">
            <p>Vaga cadastrada com sucesso</p>
        </div>
        <div id="failed">
            <p>Não foi possível cadastrar a vaga </p>
        </div>
        <div id="failconn">
            <p>Não foi possível conectar</p>
        </div>

        <div class="input-group mt-2">
            <div class="input-group-prepend">
                <span class="input-group-text" >Data de Entrada</span>
            </div>
            <input type="text" class="form-control" id="entry-date" value="<?php echo date('d/m/Y') ?>"disabled>
        </div>

        <div class="input-group mt-2">
            <div class="input-group-prepend">
                <span class="input-group-text">Entrada</span>
            </div>
            <input type="text" class="form-control" id="entry-time" value="<?php echo date('H:i:s')?>"disabled>
        </div>
        <div class="input-group mt-2">
            <div class="input-group-prepend">
                <span class="input-group-text">Número da placa</span>
            </div>
            <input type="text" class="form-control" id="plate-number" maxlength="8" required>
        </div>
       
        <button type="button" class="btn btn-warning mt-2" id="cancel-vacancy"> Cancelar </button>
        <button type="submit" class="btn btn-primary mt-2" id="create-vacancy"> Cadastrar</button>
</form>