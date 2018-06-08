$(function(){
    $("#loading").html("<img class='rounded mx-auto d-block' src='img/loading.gif'>");
    $('#form-signin').submit(function() {
        
        setTimeout(function(){ $("#loading").html('final'); }, 3000);
    });


});