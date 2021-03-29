<?php
    try {
            $pdo = new PDO('mysql:host=localhost;port=3306;dbname=tp3idaw;','root','');
            $retour["success"] = true;
            $retour["message"] = "Connexion réussie";
        } catch(Exception $e) {
            $retour["success"] = false;
            $retour["message"] = "Connexion échouée";
        }
        if(isset($_POST['id']) && !empty($_POST['id'])){
            $id = strip_tags($_POST['id']);
        debug_to_console($id)
            $sql = "DELETE FROM `liste` WHERE `id`=:id;";
        
            $query = $db->prepare($sql);
        
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();
?>