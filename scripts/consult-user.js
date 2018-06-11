$(function(){

    $("#succeed").hide();
    $("#failed").hide();
    $("#failconn").hide();
    $("#table-consult").hide();

    function deleteUser(id){
        if(confirm("[Operação sem volta] Deseja mesmo excluir este usuário ?"))
            $.post("api/user.php",{action:'delete',id: this.id})
            .done(function(data){
                if(data){
                    $("#succeed").show();
                    setTimeout(function(){ $("#succeed").hide(); }, 2000);
                }else{
                    $("#failed").show();
                    setTimeout(function(){ $("#failed").hide(); }, 2000);
                }
            }).fail(function(){
                alert("Não há conexão");
            });
    }

    $('#form-consult-users').submit(function() {
        $.post("api/user.php",{ action: "consult", name: $("#name").val(), cpf : $("#cpf").val()})
        .done(function(data){
            $("table tbody").remove();
            $("#table-consult").show();
            data = $.parseJSON(data);
            i = 0;
            $("table").append("<tbody>");
            $.each(data,function(){
                    $("table tbody").append(
                        "<tr>"+
                            "<td>"
                                +"<button class='btn btn-primary' data-toggle='modal' data-target='#edit-delete' onClick=$('#modal-id').val("+data[i].id+");$('#modal-email').val('"+data[i].email+"');$('#modal-name').val('"+data[i].name+"');$('#modal-cpf').val('"+data[i].cpf+"') ><i class='fas fa-edit fa-lg'></i></button>"
                                +'&ensp;'
                                +"<button class='btn btn-primary' onClick='deleteUser("+data[i].id+")'><i class='fas fa-trash-alt fa-lg'></button></i>"+
                            "</td>"+
                            "<td>"+data[i].id+"</td>"+
                            "<td>"+data[i].name+"</td>"+
                            "<td>"+data[i].cpf+"</td>"+
                        "</tr>");
                i++;
            });
            $("table").append("</tbody>");
        });

        return false;
    });

    $("#cancel-user").click(function(){ 
        window.location.replace("/parking-control/");
    });

    $("#update-user").click(function(){
        $.post("api/user.php",{action:"update", id: $("#modal-id").val(), email: $("#modal-email").val(), name: $("#modal-name").val(), cpf: $("#modal-cpf").val()})
        .done(function(data){
            if(data){
                $("#succeed").show();
                setTimeout(function(){ $("#succeed").hide(); }, 2000);
            }else{
                $("#failed").show();
                setTimeout(function(){ $("#failed").hide(); }, 2000);
            }
        }).fail(function(){
            $("#failconn").show();
            setTimeout(function(){ $("#failconn").hide(); }, 2000);
        });
    });
});