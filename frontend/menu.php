<?php
    function renderMenuToHTML($currentPageId) {
        $mymenu = array(
            "index" => array("Accueil"),
            "profil" => array("Profil"),
            "journal" => array("Journal"),
            "aliments" => array("Aliments")
        );
        echo "<nav class='menu'><ul>";
        foreach($mymenu as $pageId => $pageParameters) {
            if($currentPageId == $pageId) {
                echo 
                "<li><a id='currentpage' href=".$pageId.".php?page=".$currentPageId.">".$pageParameters[0]."</a></li>";
            } else {
                echo 
                "<li><a href=".$pageId.">".$pageParameters[0]."</a></li>";
            }
        }
        echo
        "</ul>
        </nav>";
    }
?>