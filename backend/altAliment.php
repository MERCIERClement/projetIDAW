<?php 
    function altAliment($data) {
        try {
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=tp3idaw;','root','');
        $retour["success"] = true;
        $retour["message"] = "Connexion réussie";
    } catch(Exception $e) {
        $retour["success"] = false;
        $retour["message"] = "Connexion échouée";
    }
    $requete = $pdo->prepare("UPDATE aliment SET nom=$data['nom'] WHERE id_aliment=$data['row_number']");
    $requete->execute();
}
?>