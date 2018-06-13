<?php
  include "payment-global.inc";

  if(isset($_POST['horista']))
    $horista = $_POST['horista'];

  if(isset($_POST['monthly']))
    $mensalista = $_POST['monthly'];

  if(isset($_POST['diarist']))
    $anista = $_POST['diarist'];

    $fp = fopen("C:\\xampp\htdocs\parking-control\modules\admin-panel\payment-global.inc", "w");
    $escreve = fwrite($fp, '<?php $horista = '.$horista.'; $mensalista ='.$mensalista.'; $anista = '.$anista.';  ?>');
    fclose($fp);
?>

<form id="form-payment" method="post">
    <link rel="stylesheet" type="text/css" href="\parking-control\css\payment.css">
    <script src="\parking-control\scripts\payment.js"> </script>
        <h2 class="text-center"> Cadastrar Pagamento </h2>
        <hr>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Horista</span>
            </div>
            <input type="text" name="horista" class="form-control" value="<?php echo $horista ?>" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Mensalista</span>
            </div>
            <input type="text" id="monthly" class="form-control" value="<?php echo $mensalista ?>" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Anista</span>
            </div>
            <input type="text" name="diarist" class="form-control" value="<?php echo $anista     ?>" required>
        </div>
        <button type="button" class="btn btn-warning mt-2" id="cancel-payment"> Cancelar </button>
        <button type="submit" class="btn btn-primary mt-2" id="create-payment"> Cadastrar</button>
</form>
