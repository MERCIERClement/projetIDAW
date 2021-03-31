<?php
    require_once("header.php");
    require_once("menu.php");
    $currentPageId = "journal";
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    renderMenuToHTML($currentPageId);
?>
<section class="corps">
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
                    <form id="formJ" method="GET" action="../backend/addAliment.php" autocomplete="off" target="iframe"> 
                        <div>
                            <label>Plat :</label><label class="validation-error hide" id="nomValidationError">Veuillez remplir toutes les informations s'il vous plaît</label>
                            <select name="nom" id="nom" form="formJ">  
                            </select>
                        </div>
                        <p>
                            <label>Quantité (en g) :</label>
                            <input type="float" name="quantite" id="quantite">
                        </p>
                        <p>
                            <label>Date du repas :</label>
                            <input type="date" name="date" id="date">
                        </p>
                        <div class="bouton-du-form">
                            <input id="formbutton" type="submit" value="Submit">
                        </div>
                        </form>
                        <?php ?>
                </td>
                <td>
                    <table class="liste" id="listerepas">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Quantité (en g)</th>
                                <th>Date</th>
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
                    var table =$('#listerepas').DataTable({
                        'ajax':{
                            "url":"../backend/getJournal.php",
                            "dataSrc":""
                        },
                        "columnDefs": [ {
                            "targets": -1,
                            "data": null,
                            "defaultContent": "<button class=\"delete\">Delete</button><button class=\"update\">Update</button>" //https://datatables.net/examples/ajax/null_data_source.html
                        } ]
                    });
                    $("#listealiment tbody").on('click','.delete',function() {
                        //delAliment(this.closest('tr').cells[0].innerHTML);
                    });
                    $("#listealiment tbody").on('click','.update', function() {
                        //onEdit(this);
                    });
                    $(".apport").on('submit', function(e){
                        e.preventDefault();
                        //onFormSubmit();
                    });
                    $(function(){

                        var items="";
                        $.getJSON("../backend/getAliment?id=1",function(data){

                        $.each(data,function(index,item) 
                        {
                            items+="<option value='"+item.id_aliment+"'>"+item.nom+"</option>";
                        });
                        $("#nom").html(items); 
                        });

                    });
                } )</script>
        <script src="js/crud.js"></script>
</section>
    <?php
        require_once("footer.php");
    ?>