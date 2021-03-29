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

                $sql_aliment = "INSERT INTO aliment (type, nom) VALUES (:type, nom);";
                $sql_apport  = "INSERT INTO apport (glucides, proteines, lipides, sel, calories) VALUES (:glucides, :proteines, :lipides, :sel, :calories);";

                $query_aliment = $pdo->prepare($sql_aliment);

                $query_aliment->bindValue(':type',$type, PDO::PARAM_STR);
                $query_aliment->bindValue('nom',$nom, PDO::PARAM_STR);


                $query_aliment->execute();


                $query_apport = $pdo->prepare($sql_apport);

                $query_apport->bindValue(':glucides',$glucides, PDO::PARAM_STR);
                $query_apport->bindValue(':proteines',$proteines, PDO::PARAM_STR);
                $query_apport->bindValue(':lipides',$lipides,PDO::PARAM_STR);
                $query_apport->bindValue(':sel',$sel,PDO::PARAM_STR);
                $query_apport->bindValue(':calories',$calories,¨PDO::PARAM_STR);


                $query_apport->execute();
            }
        }
    }
?>
