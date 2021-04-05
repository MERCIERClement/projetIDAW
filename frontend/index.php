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
    $date=date("Y-m-d");
    echo "<h2>Votre IMC</h2> 
          <p>". ($poids)/($taille/100)**2 ."</p>";
    if ((($poids)/($taille/100)**2)>25) {
        echo "<p>25 est la limite du surpoids.";
        } elseif ((($poids)/($taille/100)**2)<20) {
            echo "<p>20 est la limite de la situation de maigreur.";
        }
    echo "<h2>Vos besoins journaliers en kilo-calories(kcal) :</h2>";
    if ($sexe==0) {
        echo "<p>". (13.7516*$poids + 5.0033*$taille - 6.7550*$age + 66.473)*(1.3+(0.06*$sport)) ." kcal</p>";
    } else {
        echo "<p>". (9.5634*$poids + 1.8496*$taille - 4.6756*$age + 655.0955)*(1.3+(0.06*$sport)) ." kcal</p>";
    }
    }
?>
</section>
    <?php
        require_once("footer.php");
        ?>