

$(document).ready(function(){

    $('#frmLogin').ajaxForm({
        type: 'POST',
        timeout: 10000,
        success: function(response){
            if(response == "CONCEDED"){
                window.location.replace("http://localhost/parking-control/index.php");
            }
        },
        error: function(){
            console.log('Oops, Ocorreu um erro. ');
        }
    });
});