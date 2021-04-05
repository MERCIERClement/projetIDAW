//Journal

function onFormSubmitJ(login){
    if(validateJ()){
        let formData = lireLeFormJ();
        $.ajax({
            type: "GET",
            url: "../../backend/addJournal.php?ind="+formData.ind+"&nom="+formData.nom+"&quantite="+formData.quantite+"&date="+formData.date+"&login="+login,
            success: function(){
				$('#listerepas').DataTable().ajax.reload(null,false);
        }
        })
        resetFormJ();
    }
}

function lireLeFormJ() {
    let formData = {};
    formData["ind"] = document.getElementById("ind").value;
    formData["nom"] = document.getElementById("nom").value;
    formData["quantite"] = document.getElementById("quantite").value;
    formData["date"] = document.getElementById("date").value;
    return formData
}

function resetFormJ(){
    document.getElementById("ind").value ="";
    document.getElementById("nom").value ="";
    document.getElementById("quantite").value ="";
    document.getElementById("date").value ="";
}

function validateJ() {
    isValid=true;
    if(document.getElementById('nom').value == "" || document.getElementById('quantite').value == "" || document.getElementById('date').value == ""){
        isValid= false;
        document.getElementById("nomValidationError").classList.remove('hide');
    }
    else{
        isValid=true;
        if(!document.getElementById("nomValidationError").classList.contains('hide')){
            document.getElementById("nomValidationError").classList.add('hide')
        }
    }
    return isValid;
}

function onEditJ(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("ind").value = selectedRow.cells[0].innerHTML;
    document.getElementById("nom").value = selectedRow.cells[1].innerHTML;
    document.getElementById("quantite").value = selectedRow.cells[2].innerHTML;
    document.getElementById("date").value = selectedRow.cells[3].innerHTML;
}

function delJournal(idDel){
    $(document).ready(function(){
        $.ajax({
            type: "DELETE",
            url: "../../backend/delJournal.php?id="+idDel,
            success: function(){
				$('#listerepas').DataTable().ajax.reload(null,false);
        }});
    })
}

function test(){
    alert(document.getElementById("date").value);
}

$(document).ready( function () {
    var login = $("#sess").text();
    var table =$('#listerepas').DataTable({
        'ajax':{
            "url":"../backend/getJournal.php?login="+login,
            "dataSrc":""
        },
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button class=\"delete\">Delete</button><button class=\"update\">Update</button>" //https://datatables.net/examples/ajax/null_data_source.html
        } ]
    });
    $("#listerepas tbody").on('click','.delete',function() {
        delJournal(this.closest('tr').cells[0].innerHTML);
    });
    $("#listerepas tbody").on('click','.update', function() {
        onEditJ(this);
    });
    $("td").on('click','#clearformJ', function() {
        resetFormJ();
    });
    $("#formJ").on('submit', function(e){
        e.preventDefault();
        onFormSubmitJ(login);
    });
    $(function(){

        var items="";
        $.getJSON("../backend/getAliment?id=1",function(data){

        $.each(data,function(index,item) 
        {
            items+="<option value='"+item.nom+"'>"+item.nom+"</option>";
        });
        $("#nom").html(items); 
        });

    });
} )