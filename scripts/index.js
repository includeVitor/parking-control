$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    $('#leave').click(function(){
        window.location.href = "login.php";
    });



    
});