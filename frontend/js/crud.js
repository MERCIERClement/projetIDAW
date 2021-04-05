let selectedRow = null;
function onFormSubmit(){
    if(validate()){
        let formData = lireLeForm();
        $.ajax({
            type: "GET",
            url: "../../backend/addAliment.php?id="+formData.id+"&type="+formData.type+"&nom="+formData.nom+"&glucides="+formData.glucides+"&proteines="+formData.proteines+"&lipides="+formData.lipides+"&sel="+formData.sel+"&calories="+formData.calories,
            success: function(){
				$('#listealiment').DataTable().ajax.reload(null,false);
        }
        })
        resetForm();
    }
}
function lireLeForm() {
    let formData = {};
    formData["id"] = document.getElementById("id").value;
    formData["type"] = document.getElementById("type").value;
    formData["nom"] = document.getElementById("nom").value;
    formData["glucides"] = document.getElementById("glucides").value;
    formData["proteines"] = document.getElementById("proteines").value;
    formData["lipides"] = document.getElementById("lipides").value;
    formData["sel"] = document.getElementById("sel").value;
    formData["calories"] = document.getElementById("calories").value;
    return formData
}
function insererEntree(data) {
    let table = document.getElementById("listealiment").getElementsByTagName('tbody')[0];
    let nouvelleLigne = table.insertRow(table.length);
    cell1 = nouvelleLigne.insertCell(0);
    cell1.innerHTML = data.type;
    cell2 = nouvelleLigne.insertCell(1);
    cell2.innerHTML = data.nom;
    cell3 = nouvelleLigne.insertCell(2);
    cell3.innerHTML = data.glucides;
    cell4 = nouvelleLigne.insertCell(3);
    cell4.innerHTML = data.proteines;
    cell5 = nouvelleLigne.insertCell(4);
    cell5.innerHTML = data.lipides;
    cell6 = nouvelleLigne.insertCell(5);
    cell6.innerHTML = data.sel;
    cell7 = nouvelleLigne.insertCell(6);
    cell7.innerHTML = data.calories;
    cell8 = nouvelleLigne.insertCell(7);
    cell8.innerHTML = `<a onClick="onEdit(this)">Modifier</a>
                        <a onClick="onDelete(this)">Supprimer</a>`;
}
function resetForm(){
    document.getElementById("id").value ="";
    document.getElementById("type").value ="";
    document.getElementById("nom").value ="";
    document.getElementById("glucides").value ="";
    document.getElementById("proteines").value ="";
    document.getElementById("lipides").value ="";
    document.getElementById("sel").value ="";
    document.getElementById("calories").value ="";
    let selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("id").value = selectedRow.cells[0].innerHTML;
    document.getElementById("type").value = selectedRow.cells[1].innerHTML;
    document.getElementById("nom").value = selectedRow.cells[2].innerHTML;
    document.getElementById("glucides").value = selectedRow.cells[3].innerHTML;
    document.getElementById("proteines").value = selectedRow.cells[4].innerHTML;
    document.getElementById("lipides").value = selectedRow.cells[5].innerHTML;
    document.getElementById("sel").value = selectedRow.cells[6].innerHTML;
    document.getElementById("calories").value = selectedRow.cells[7].innerHTML;
}

function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.type;
    selectedRow.cells[1].innerHTML = formData.nom;
    selectedRow.cells[2].innerHTML = formData.glucides;
    selectedRow.cells[3].innerHTML = formData.proteines;
    selectedRow.cells[4].innerHTML = formData.lipides;
    selectedRow.cells[5].innerHTML = formData.sel;
    selectedRow.cells[6].innerHTML = formData.calories;
}

function onDelete(td) {
    if(confirm('Voulez-vous vraiment supprimer cette entrée ?')) {
        row = td.parentElement.parentElement;
        document.getElementById("listealiment").deleteRow(row.rowIndex);
        resetForm();
    }
}
function validate() {
    isValid=true;
    if(document.getElementById('type').value == "" || document.getElementById('nom').value == "" || document.getElementById('glucides').value == "" || 
    document.getElementById('proteines').value == "" || document.getElementById('lipides').value == "" || document.getElementById('sel').value == "" || document.getElementById('calories').value == "" ){
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

function dataTables(){
    $(document).ready( function () {
        $('#listealiment').DataTable();
    } )
}

function showAliment(){
    $(document).ready(function(){
        $.ajax({
            type: "GET",
            url: "../../backend/getAliment.php",
            success: function(array){
                let response = array;
            }
        });
        alert(response);
    })}

function delAliment(idDel){
    $(document).ready(function(){
        $.ajax({
            type: "DELETE",
            url: "../../backend/delAliment.php?id="+idDel,
            success: function(){
				$('#listealiment').DataTable().ajax.reload(null,false);
        }});
    })
}

$(document).ready( function () {
    var table =$('#listealiment').DataTable({
        'ajax':{
            "url":"../backend/getAliment.php",
            "dataSrc":""
        },
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button class=\"delete\">Delete</button><button class=\"update\">Update</button>" //https://datatables.net/examples/ajax/null_data_source.html
        } ]
    });
    $("#listealiment tbody").on('click','.delete',function() {
        delAliment(this.closest('tr').cells[0].innerHTML);
    });
    $("#listealiment tbody").on('click','.update', function() {
        onEdit(this);
    });
    $("td").on('click','#clearform', function() {
        resetForm();
    });
    $(".apport").on('submit', function(e){
        e.preventDefault();
        onFormSubmit();
    });
} )
//Login

function chooseLogin(loginChosen){
    $(document).ready(function(){
        document.cookie = 'login='+loginChosen;  
        var profil=[];
        $.ajax({
            type: "GET",
            url: "../backend/getLogin.php?login="+loginChosen,
            success : function(data){
            profil[0]=data[0].loginChosen;
            profil[1]=parseInt(data[0].Age,10);
            profil[2]=parseInt(data[0].Poids,10);
            profil[3]=parseInt(data[0].Sexe,10);
            profil[4]=parseInt(data[0].Taille,10);
            profil[5]=parseInt(data[0].Sport,10);

            document.cookie = 'age='+profil[1];
            document.cookie = 'poids='+profil[2];
            document.cookie = 'sexe='+profil[3];
            document.cookie = 'taille='+profil[4];
            document.cookie = 'sport='+profil[5];
            document.location.href="index.php";
            }
        })
    })
}
            
function parseLogin(login){
    var a = login.split('@');
    var logArray = a[0].split('.');
    login = "";
    logArray.forEach(mot => {
        if(login==""){
            login+=mot;
        }
        else{
            login+=" "+mot;
        }
        
    });
    return login;
}