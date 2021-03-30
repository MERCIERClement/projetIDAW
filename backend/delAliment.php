<?php
    try {
            $pdo = new PDO('mysql:host=localhost;port=3306;dbname=tp3idaw;','root','');
            $retour["success"] = true;
            $retour["message"] = "Connexion réussie";
        } catch(Exception $e) {
            $retour["success"] = false;
            $retour["message"] = "Connexion échouée";
        }
        $id=0;
        if(isset($_POST['id'])){
            $id = strip_tags($_POST['id']);
        }
        print_r($id);
        if($id>0){
            $sql = "DELETE FROM `aliment` WHERE `id`=:id;";
        
            $query = $db->prepare($sql);
        
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();
        }
?>