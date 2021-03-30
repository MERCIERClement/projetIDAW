<?php
    require_once("header.php");
    require_once("menu.php");
    $currentPageId = "aliments";
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    renderMenuToHTML($currentPageId);
?>
<?php
    $pageToInclude = $currentPageId.".php";
    if(is_readable($pageToInclude))
        require_once($pageToInclude);
    else
        require_once("error.php");
?> 
    <script type="text/javascript" charset="utf8" src="js/datatables.js"></script>
    <table>
            <tr>
                <td>
                    <iframe name="iframe" style="display:none;"></iframe>
                    <form class="apport" method="GET" action="../backend/addAliment.php" autocomplete="off" target="iframe"> 
                        <div>
                            <label>Type</label><label class="validation-error hide" id="nomValidationError">Veuillez remplir toutes les informations s'il vous plaît</label>
                            <input type="text" name="type" id="type">   
                        </div>
                        <div>
                            <label>Nom</label>
                            <input type="text" name="nom" id="nom">
                        </div>
                        <p>
                            <label>Glucides (pour 100g)</label>
                            <input type="float" name="glucides" id="glucides">
                        </p>
                        <p>
                            <label>Protéines (pour 100g)</label>
                            <input type="float" name="proteines" id="proteines">
                        </p>
                        <p>
                            <label>Lipides (pour 100g)</label>
                            <input type="float" name="lipides" id="lipides">
                        </p>
                        <p>
                            <label>Sel (pour 100g)</label>
                            <input type="float" name="sel" id="sel">
                        </p>
                        <p>
                            <label>Calories (kcal/100g)</label>
                            <input type="float" name="calories" id="calories">
                        </p>
                        <div class="bouton-du-form">
                            <input type="submit" value="Submit">
                        </div>
                        </form>
                        <?php ?>
                </td>
                <td>
                    <table class="liste" id="listealiment">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Type</th>
                                <th>Nom</th>
                                <th>Glucides(/100gr)</th>
                                <th>Protéines(/100gr)</th>
                                <th>Lipides(/100gr)</th>
                                <th>Sel(/100gr)</th>
                                <th>Calories(kcal/100gr)</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
        <script>$(document).ready( function () {
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
                        alert(this.closest('tr').cells[0].innerHTML);
                    });
                } )</script>
        <script src="js/crud.js"></script>
    <?php
       require_once("footer.php");
    ?>
