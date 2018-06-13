$(function (){
    $("#succeed").hide();
    $("#failed").hide();
    $("#failconn").hide();
    $('#form-create-customers').submit(function() {
        $.post("api/customer.php",{action: "create", email: $("#email").val(), name: $("#name").val(), cpf: $("#cpf").val()})
        .done(function(data){
            if(data){
                $("#succeed").show();
                setTimeout(function(){ $("#succeed").hide(); }, 2000);
            }else{
                $("#failed").show();
                setTimeout(function(){ $("#failed").hide(); }, 2000);
            }
            $("#form-create-customers")[0].reset();
        }).fail(function(){
            $("#failconn").show();
            setTimeout(function(){ $("#failconn").hide(); }, 2000);
        });
        return false;
    });
    $("#customer-user").click(function(){ 
        window.location.replace("/parking-control/");
    });
    var i = 1;
    $("#add-plate-number").click(function(){
        $("#div-plate-number").append(`<input type="text" id="plate-number${i}" class="form-control mt-2" placeholder="Número da placa" maxlength="8" required>`);
        i++;
    });
});