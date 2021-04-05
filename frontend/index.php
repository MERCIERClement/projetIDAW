<?php
    require_once("header.php");
    require_once("menu.php");
    $currentPageId = "index";
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
if (!isset($_COOKIE["age"])) {
    echo "<h2>Oups !</h2>
          <p>Veuillez essayer de vous connecter à nouveau une erreur est arrivée :( </p>";
} else {
    $poids=$_COOKIE["poids"];
    $age=$_COOKIE["age"];
    $taille=$_COOKIE["taille"];
    $sexe=$_COOKIE["sexe"];
    $sport=$_COOKIE["sport"];
    echo "<h2>Votre IMC</h2> 
          <p>".$taille."</p>";}
?>
</section>
    <?php
        require_once("footer.php");
        ?>