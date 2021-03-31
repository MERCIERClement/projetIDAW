<!DOCTYPE html>
<html>
    <head>
    <title>iℳangerℳieux</title>
        <link rel="stylesheet" href="css/stylesheet.css" type="text/css"
            media="screen" title="default" charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="css/datatables.css">
            <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
            <script type="text/javascript" charset="utf8" src="js/datatables.js"></script>

    </head>
    <body>
    <table class="liste" id="listelogin">
                        <thead>
                            <tr>
                                <th>Login</th>
                                <th>Age</th>
                                <th>Sport</th>
                                <th>Sexe</th>
                                <th>Taille</th>
                                <th>Poids</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <script>$(document).ready( function () {
                    var table =$('#listelogin').DataTable({
                        'ajax':{
                            "url":"../backend/getLogin.php",
                            "dataSrc":""
                        },
                        "columnDefs": [ {
                            "targets": -1,
                            "data": null,
                            "defaultContent": "<button class=\"choose\">Choisir</button>" //https://datatables.net/examples/ajax/null_data_source.html
                        } ]
                    });
                    $("#listelogin tbody").on('click','.choose',function() {
                        chooseLogin(this.closest('tr').cells[0].innerHTML);
                    });
                } )</script>
                <script src="js/crud.js"></script>
    <?php require_once('footer.php') ?>
    