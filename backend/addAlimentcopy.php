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
            
        }    
?>
