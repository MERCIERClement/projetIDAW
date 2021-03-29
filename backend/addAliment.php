<?php 
        try {
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=tp3idaw;','root','');
        $retour["success"] = true;
        $retour["message"] = "Connexion réussie";
    } catch(Exception $e) {
        $retour["success"] = false;
        $retour["message"] = "Connexion échouée";
        if(isset($_POST)){
            if(!empty($_POST['nom']) && !empty($_POST['type']) && !empty($_POST['glucides']) &&
            !empty($_POST['proteines']) && !empty($_POST['lipides']) && !empty($_POST['sel']) &&
            !empty($_POST['calories'])){
                $nom=$_POST['nom'];
                $type=$_POST['type'];
                $glucides=$_POST['glucides'];
                $proteines=$_POST['proteines'];
                $lipides=$_POST['lipides'];
                $sel=$_POST['sel'];
                $calories=$_POST['calories'];
            }
        }