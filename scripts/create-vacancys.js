$(function (){
    
    $("#succeed").hide();
    $("#failed").hide();
    $("#failconn").hide();
    $('#form-create-vacancys').submit(function() {
        $.post("api/vacancy.php",{action: "create", entryDate: $("#entry-date").val(), entryTime: $("#entry-time").val(), plateNumber: $("#plate-number").val()})
        .done(function(data){
            if(data){
                $("#succeed").show();
                setTimeout(function(){ $("#succeed").hide(); }, 2000);
            }else{
                $("#failed").show();
                setTimeout(function(){ $("#failed").hide(); }, 2000);
            }
            $("#form-create-vacancys")[0].reset();
        }).fail(function(){
            $("#failconn").show();
            setTimeout(function(){ $("#failconn").hide(); }, 2000);
        });
        return false;
    });
    $("#cancel-vacancy").click(function(){ 
        window.location.replace("/parking-control/");
    });
});