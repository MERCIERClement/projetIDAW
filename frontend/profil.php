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
    <h2>Du contenu</h2> 
                <p>Toujours + de contenu</p>
</section>
    <?php
        require_once("footer.php");
    ?>