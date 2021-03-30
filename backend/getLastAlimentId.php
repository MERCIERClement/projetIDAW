<?php header('Content-Type: application/json');
    try {
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=tp3idaw;','root','');
        $retour["success"] = true;
        $retour["message"] = "Connexion réussie";
    } catch(Exception $e) {
        $retour["success"] = false;
        $retour["message"] = "Connexion échouée";
    }
$requete = $pdo->prepare("SELECT MAX(aliment.id_aliment) FROM aliment");
    $requete->execute();

    $retour["success"] = true;
    $retour["message"] = "Voici le max id";
    $retour["resultats"]["max_id"] = $requete->fetchAll($fetch_style=PDO::FETCH_NUM);
    echo json_encode($retour["resultats"]["max_id"]);
    ?>