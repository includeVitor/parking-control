$(function(){
    

    $("#loading").hide();
    $("#fail-login").hide();
    $("#fail").hide();
    $('#form-signin').submit(function() {
        
        $("#loading").show();
        $("#fail-login").hide();
        $("#fail").hide();
        $.post("api/auth.php", { email: $("#email").val(), password: $("#password").val() })
        .done(function(data){
            if(data == 'success')
                setTimeout(function(){ window.location = "/parking-control/"}, 3500);
            else
                setTimeout(function(){ $("#loading").hide(); $("#fail-login").show(); }, 3500);
        })
        .fail(function(){
            setTimeout(function(){ $("#loading").hide(); $("#fail").show(); }, 3500);
        });
        
        return false;
    });


});