function deleteVacancy(id){
    if(confirm("[Operação sem volta] Deseja mesmo excluir este usuário ?"))
        $.post("api/vacancy.php",{action:'delete',id: id})
        .done(function(data){
            if(data){
                $("#delete-succeed").show();
                setTimeout(function(){ $("#delete-succeed").hide(); }, 2000);
                atualizaTable();
            }else{
                $("#delete-failed").show();
                setTimeout(function(){ $("#delete-failed").hide(); }, 2000);
            }
        }).fail(function(){
            alert("Não há conexão");
    });
}
function atualizaTable() {   
    $.post("api/vacancy.php",{ action: "consult", plateNumber : $("#plate-number").val()})
        .done(function(data){
            $("table tbody").remove();
            $("#table-consult").show();
            data = $.parseJSON(data);
            i = 0;
            $("table").append("<tbody>");
            $.each(data,function(){

                if(data[i].exitdate == null)
                    data[i].exitdate = "";
                if(data[i].exittime == null)
                    data[i].exittime = "";

                $("table tbody").append(
                    "<tr>"+
                        "<td>"
                            +"<button class='btn btn-primary' data-toggle='modal' data-target='#edit-delete' onClick=$('#modal-id').val("+data[i].id+");$('#modal-plate-number').val('"+data[i].platenumber+"');$('#modal-entry-date').val('"+data[i].entrydate+"');$('#modal-exit-date').val('"+data[i].exitdate+"');$('#modal-entry-time').val('"+data[i].entrytime+"');$('#modal-exit-time').val('"+data[i].exittime+"') ><i class='fas fa-edit fa-lg'></i></button>"
                            +'&ensp;'
                            +"<button class='btn btn-primary' onClick='deleteVacancy("+data[i].id+")'><i class='fas fa-trash-alt fa-lg'></button></i>"+
                        "</td>"+
                        "<td>"+data[i].id+"</td>"+
                        "<td>"+data[i].platenumber+"</td>"+
                    "</tr>");

                i++;
            });
            $("table").append("</tbody>");
    });
}

function updateUser(){
    $.post("api/vacancy.php",{action:'update', id: $("#modal-id").val(), plateNumber: $("#modal-plate-number").val(), entryDate: $('#modal-entry-date').val(), exitDate: $('#modal-exit-date').val(), entryTime: $("#modal-entry-time").val(), exitTime: $("#modal-exit-time").val()})
        .done(function(data){
            if(data){
                $("#succeed").show();
                setTimeout(function(){ $("#succeed").hide(); }, 2000);
                atualizaTable();
            }else{
                $("#failed").show();
                setTimeout(function(){ $("#failed").hide(); }, 2000);
            }
        }).fail(function(){
            $("#failconn").show();
            setTimeout(function(){ $("#failconn").hide(); }, 2000);
    });
}

$(function(){


    $("#delete-succeed").hide();
    $("#delete-failed").hide();
    $("#delete-failconn").hide();
    $("#succeed").hide();
    $("#failed").hide();
    $("#failconn").hide();
    $("#table-consult").hide();

    $('#form-consult-vacancys').submit(function() {
        atualizaTable();
        return false;
    });

    $("#cancel-user").click(function(){ 
        window.location.replace("/parking-control/");
    });

    $("#update-user").click(function(){
        updateUser();
    });
});