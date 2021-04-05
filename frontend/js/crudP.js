//Profil

function onProfil(profil) {
    document.getElementById("login").value = profil[0];
    document.getElementById("age").value = profil[1];
    document.getElementById("poids").value = profil[2];
    document.getElementById("sexe").value = profil[3];
    document.getElementById("taille").value = profil[4];
    document.getElementById("sport").value = profil[5];
}

$(document).ready( function () {
    var login = $("#sess").text();
    var profil=[];
    $.getJSON('../backend/getLogin.php?login='+login,function(data){
        profil[0]=data[0].Login;
        profil[1]=parseInt(data[0].Age,10);
        profil[2]=parseInt(data[0].Poids,10);
        profil[3]=parseInt(data[0].Sexe,10);
        profil[4]=parseInt(data[0].Taille,10);
        profil[5]=parseInt(data[0].Sport,10);
        onProfil(profil);
    });
    $(".profil").on('submit', function(e){
        e.preventDefault();
        onFormSubmitP();
    });
} )

function onFormSubmitP(){
    if(validateP()){
        let formData = lireLeFormP();
        $.ajax({
            type: "GET",
            url: "../../backend/addProfil.php?login="+formData.login+"&age="+formData.age+"&poids="+formData.poids+"&taille="+formData.taille+"&sport="+formData.sport+"&sexe="+formData.sexe,
            success: function(){
                document.cookie = 'age='+formData.age;
                document.cookie = 'poids='+formData.poids;
                document.cookie = 'sexe='+formData.sexe;
                document.cookie = 'taille='+formData.taille;
                document.cookie = 'sport='+formData.sport;
        }
        })
    }
}

function validateP() {
    isValid=true;
    if(document.getElementById('age').value == "" || document.getElementById('poids').value == "" || document.getElementById('taille').value == ""|| document.getElementById('sport').value == ""){
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

function lireLeFormP() {
    let formData = {};
    formData["login"] = document.getElementById("login").value;
    formData["age"] = document.getElementById("age").value;
    formData["poids"] = document.getElementById("poids").value;
    formData["taille"] = document.getElementById("taille").value;
    formData["sport"] = document.getElementById("sport").value;
    formData["sexe"] = document.getElementById("sexe").value;
    return formData
}