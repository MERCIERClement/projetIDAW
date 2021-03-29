let selectedRow = null;
function onFormSubmit(){
    if(validate()){
        let formData = lireLeForm();
        if(selectedRow == null) {
            insererEntree(formData);
        } else {
            updateRecord(formData)
        }
        resetForm();
    }
}
function lireLeForm() {
    let formData = {};
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
    document.getElementById("type").value = selectedRow.cells[0].innerHTML;
    document.getElementById("nom").value = selectedRow.cells[1].innerHTML;
    document.getElementById("glucides").value = selectedRow.cells[2].innerHTML;
    document.getElementById("proteines").value = selectedRow.cells[3].innerHTML;
    document.getElementById("lipides").value = selectedRow.cells[4].innerHTML;
    document.getElementById("sel").value = selectedRow.cells[5].innerHTML;
    document.getElementById("calories").value = selectedRow.cells[6].innerHTML;
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