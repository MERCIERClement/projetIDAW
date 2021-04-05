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
    });})