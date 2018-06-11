$(function (){

    $("#succeed").hide();
    $("#failed").hide();
    $("#failconn").hide();
    $('#form-create-users').submit(function() {
        $.post("api/user.php",{action: "create", email: $("#email").val(), name: $("#name").val(), password: $("#password").val(), cpf: $("#cpf").val()})
        .done(function(data){
            if(data){
                $("#succeed").show();
                setTimeout(function(){ $("#succeed").hide(); }, 2000);
            }else{
                $("#failed").show();
                setTimeout(function(){ $("#failed").hide(); }, 2000);
            }
            $("#form-create-users")[0].reset();
        }).fail(function(){
            $("#failconn").show();
            setTimeout(function(){ $("#failconn").hide(); }, 2000);
        });
        return false;
    });
    $("#cancel-user").click(function(){ 
        window.location.replace("/parking-control/");
    });
});