<?php 
        try {
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=tp3idaw;','root','');
    } catch(Exception $e) {
        alert("Exception reçue : ", $e->getMessage(), '\n');}
        if( isset($_GET['nom']) && !empty($_GET['nom']) && isset($_GET['quantite']) && !empty($_GET['quantite']) && isset($_GET['date']) && !empty($_GET['date'])){
            $nom=$_GET['nom'];
            $date=$_GET['date'];

            //on recupère l'id de l'aliment
            $sql_idAliment = "SELECT id_aliment FROM aliment WHERE nom = :nom";
            $query_idAliment = $pdo->prepare($sql_idAliment);
            $query_idAliment->bindValue(':nom',$nom, PDO::PARAM_STR);
            $query_idAliment->execute();
            $idAl = $query_idAliment->fetchALL($fetch_style=PDO::FETCH_NUM);
            $id_aliment = $idAl[0][0];
            if(empty($_GET['ind'])){
                $login=$_SESSION['login']
                $sql_journal = "INSERT INTO journal (date,Login) VALUES (:date, :login);";
                $query_journal = $pdo->prepare($sql_journal);
                $query_journal->bindValue(':date',$date, PDO::PARAM_STR);
                $query_journal->bindValue(':login',$login, PDO::PARAM_STR);
                $query_journal->execute(); 
                $ind= $pdo->lastInsertId();
                $date=$_GET['date'];
                $quantite=$_GET['quantite'];
                $sql_manger = "INSERT INTO manger VALUES (:ind,:id_aliment,:quantite);";
                $query_manger = $pdo->prepare($sql_manger);
                $query_manger->bindValue(':id_aliment',$id_aliment, PDO::PARAM_INT);
                $query_manger->bindValue(':ind',$ind, PDO::PARAM_INT);
                $query_manger->bindValue(':quantite',$quantite, PDO::PARAM_INT);
                $query_manger->execute();
            } else {
                $ind=$_GET['ind'];
                $sql_modify_journal = "UPDATE journal SET date = :date WHERE ind=:ind;";
                $query_modify_journal = $pdo->prepare($sql_modify_journal);
                $query_modify_journal->bindValue(':date',$date, PDO::PARAM_STR);
                $query_modify_journal->bindValue(':ind',$ind, PDO::PARAM_INT);
                $query_modify_journal->execute(); 
                $quantite=$_GET['quantite'];
                $sql_modify_manger = "UPDATE manger SET quantite= :quantite,id_aliment= :id_aliment WHERE ind=".$ind;
                $query_modify_manger = $pdo->prepare($sql_modify_manger);
                $query_modify_manger->bindValue(':id_aliment',$id_aliment, PDO::PARAM_INT);
                $query_modify_manger->bindValue(':quantite',$quantite, PDO::PARAM_STR);
                $query_modify_manger->execute();
            }
        }
?>
