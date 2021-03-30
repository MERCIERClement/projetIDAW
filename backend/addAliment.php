<?php 
        try {
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=tp3idaw;','root','');
        echo "connexion reussie";
    } catch(Exception $e) {
        alert("Exception reçue : ", $e->getMessage(), '\n');}
        if(isset($_GET)){
            if(!empty($_GET['nom']) && !empty($_GET['type']) && !empty($_GET['glucides']) &&
            !empty($_GET['proteines']) && !empty($_GET['lipides']) && !empty($_GET['sel']) &&
            !empty($_GET['calories'])){
                $nom=$_GET['nom'];
                $type=$_GET['type'];
                $glucides=$_GET['glucides'];
                $proteines=$_GET['proteines'];
                $lipides=$_GET['lipides'];
                $sel=$_GET['sel'];
                $calories=$_GET['calories'];

                $sql_aliment = "INSERT INTO aliment (type, nom) VALUES (:type, :nom);";
                $sql_apport  = "INSERT INTO apport (glucides, proteines, lipides, sel, calories) VALUES (:glucides, :proteines, :lipides, :sel, :calories);";

                $query_aliment = $pdo->prepare($sql_aliment);

                $query_aliment->bindValue(':type',$type, PDO::PARAM_STR);
                $query_aliment->bindValue(':nom',$nom, PDO::PARAM_STR);


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
?>
