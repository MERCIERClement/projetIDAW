<?php 
        try {
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=tp3idaw;','root','');
    } catch(Exception $e) {
        alert("Exception reçue : ", $e->getMessage(), '\n');}
        if( isset($_GET['login']) && !empty($_GET['login']) && isset($_GET['age']) && !empty($_GET['age']) && isset($_GET['poids']) && !empty($_GET['poids']) && isset($_GET['taille']) && !empty($_GET['taille'])&& isset($_GET['sport']) && !empty($_GET['sport']))
        {

            $sql_modify_utilisateur = "UPDATE utilisateur SET Age=:age, Poids= :poids,Taille = :taille, Sport=:sport WHERE Login=:login;";
            $query_modify_utilisateur = $pdo->prepare($sql_modify_utilisateur);
            $taille = (int) $_GET['taille'];
            $age = (int) $_GET['age'];
            $poids = (int) $_GET['poids'];
            $sport = (int) $_GET['sport'];
            $login =$_GET['login'];
            $query_modify_utilisateur->bindValue(':taille',$taille, PDO::PARAM_INT);
            $query_modify_utilisateur->bindValue(':age',$age, PDO::PARAM_INT);
            $query_modify_utilisateur->bindValue(':poids',$poids, PDO::PARAM_STR);
            $query_modify_utilisateur->bindValue(':sport',$sport, PDO::PARAM_INT);
            $query_modify_utilisateur->bindValue(':login',$login, PDO::PARAM_STR);
            $query_modify_utilisateur->execute(); 
        }
?>