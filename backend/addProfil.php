<?php 
        try {
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=tp3idaw;','root','');
    } catch(Exception $e) {
        alert("Exception reçue : ", $e->getMessage(), '\n');}
        if( isset($_GET['login']) && !empty($_GET['login']) && $_GET['age']) && !empty($_GET['age']) && isset($_GET['poids']) && !empty($_GET['poids']) && isset($_GET['taille']) && !empty($_GET['taille']&& isset($_GET['sport']) && !empty($_GET['sport']))
        {
            $sql_modify_utilisateur = "UPDATE utilisateur SET Age=:age, Poids= :poids,Taille = :taille, Sport=:sport WHERE Login=:login;";
            $query_modify_utilisateur = $pdo->prepare($sql_modify_utilisateur);
            $query_modify_utilisateur->bindValue(':taille',$_GET['taille'], PDO::PARAM_INT);
            $query_modify_utilisateur->bindValue(':age',$_GET['age'], PDO::PARAM_INT);
            $query_modify_utilisateur->bindValue(':poids',$_GET['poids'], PDO::PARAM_INT);
            $query_modify_utilisateur->bindValue(':sport',$_GET['sport'], PDO::PARAM_INT);
            $query_modify_utilisateur->bindValue(':login',$_GET['login'], PDO::PARAM_STR);
            $query_modify_utilisateur->execute(); 
        }
?>