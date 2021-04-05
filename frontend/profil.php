<?php
    require_once("header.php");
    require_once("menu.php");
    $currentPageId = "profil";
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
    <div class="form">
        <form class="profil" method="GET" action="../backend/addProfil.php" autocomplete="off" target="iframe"> 
            <div>
                <label>Login</label>
                <input type="text" name="login" id="login" readonly>   
            </div>
            <p>
                <label>Age</label><label class="validation-error hide" id="nomValidationError">Veuillez remplir toutes les informations s'il vous plaît</label>
                <input type="number" name="age" id="age" min="0">
            </p>
            <p>
                <label>Poids (en kg)</label>
                <input type="number" name="poids" id="poids" min="0">
            </p>
            <p>
                <label>Taille (en cm)</label>
                <input type="number" name="taille" id="taille" min="0">
            </p>
            <p>
                <label>Pratique du sport (1 à 10)</label>
                <input type="number" name="sport" id="sport" min="0" max="10">
            </p>
            <div class="bouton-du-form">
                <input id="profilbutton" type="submit" value="Submit">
            </div>
        </form>
    </div>
    <script src="js/crudP.js"></script>
</section>
    <?php
        require_once("footer.php");
    ?>