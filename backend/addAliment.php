<?php 
        try {
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=tp3idaw;','root','');
    } catch(Exception $e) {
        alert("Exception reçue : ", $e->getMessage(), '\n');}
        if( isset($_GET['nom']) && !empty($_GET['nom']) && isset($_GET['type']) && !empty($_GET['type']) && isset($_GET['glucides']) && !empty($_GET['glucides'])
        && isset($_GET['proteines']) && !empty($_GET['proteines']) && isset($_GET['lipides']) && !empty($_GET['lipides']) && isset($_GET['type']) && !empty($_GET['type'])  
        && isset($_GET['proteines']) && !empty($_GET['proteines']) && isset($_GET['lipides']) && !empty($_GET['lipides']) && isset($_GET['sel']) && !empty($_GET['sel']) && isset($_GET['calories']) && !empty($_GET['calories']) ){
            $nom=$_GET['nom'];
            $type=$_GET['type'];
            $sql_aliment = "INSERT INTO aliment (type, nom) VALUES (:type, :nom);";
            $query_aliment = $pdo->prepare($sql_aliment);
            $query_aliment->bindValue(':type',$type, PDO::PARAM_STR);
            $query_aliment->bindValue(':nom',$nom, PDO::PARAM_STR);
            $query_aliment->execute(); 
            $id_aliment= $pdo->lastInsertId();
            $glucides=$_GET['glucides'];
            $proteines=$_GET['proteines'];
            $lipides=$_GET['lipides'];
            $sel=$_GET['sel'];
            $calories=$_GET['calories'];

        $sql_apport = "INSERT INTO apport VALUES (:id_aliment,:glucides,:proteines,:lipides,:sel,:calories);";
        $query_apport = $pdo->prepare($sql_apport);
        $query_apport->bindValue(':id_aliment',$id_aliment, PDO::PARAM_INT);
        $query_apport->bindValue(':glucides',$glucides, PDO::PARAM_STR);
        $query_apport->bindValue(':proteines',$proteines, PDO::PARAM_STR);
        $query_apport->bindValue(':lipides',$lipides, PDO::PARAM_STR);
        $query_apport->bindValue(':sel',$sel, PDO::PARAM_STR);
        $query_apport->bindValue(':calories',$calories, PDO::PARAM_STR);
        $query_apport->execute();
        }    
?>
