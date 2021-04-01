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

            //on regarde si l'entree avec ce nom existe deja
            $sql_already_exists = "SELECT id_aliment,nom FROM aliment WHERE nom = :nom;";
            $query_already_exists = $pdo->prepare($sql_already_exists);
            $query_already_exists->bindValue(':nom',$nom, PDO::PARAM_STR);
            $query_already_exists->execute();
            $retour=$query_already_exists->fetchAll($fetch_style=PDO::FETCH_NUM);
            if(empty($_GET['id'])){
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
            } else {
                $id_aliment=$_GET['id'];
                $sql_modify_aliment = "UPDATE aliment SET type = :type WHERE nom=:nom;";
                $query_modify_aliment = $pdo->prepare($sql_modify_aliment);
                $query_modify_aliment->bindValue(':type',$type, PDO::PARAM_STR);
                $query_modify_aliment->bindValue(':nom',$nom, PDO::PARAM_STR);
                $query_modify_aliment->execute(); 
                $glucides=$_GET['glucides'];
                $proteines=$_GET['proteines'];
                $lipides=$_GET['lipides'];
                $sel=$_GET['sel'];
                $calories=$_GET['calories'];
                $sql_modify_apport = "UPDATE apport SET glucides= :glucides,proteines= :proteines,lipides= :lipides,sel= :sel,calories= :calories WHERE id_aliment=".$id_aliment;
                $query_modify_apport = $pdo->prepare($sql_modify_apport);
                $query_modify_apport->bindValue(':glucides',$glucides, PDO::PARAM_STR);
                $query_modify_apport->bindValue(':proteines',$proteines, PDO::PARAM_STR);
                $query_modify_apport->bindValue(':lipides',$lipides, PDO::PARAM_STR);
                $query_modify_apport->bindValue(':sel',$sel, PDO::PARAM_STR);
                $query_modify_apport->bindValue(':calories',$calories, PDO::PARAM_STR);
                $query_modify_apport->execute();
            }
        }         
?>
