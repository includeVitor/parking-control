$(function (){


    $("#cancel-user").click(function(){ 
        cancelUser();
    });

    $("#create-user").click(function(){
        $("#event").val(1);

    });



    function cancelUser(){
        window.location.replace("principal");
    }
});