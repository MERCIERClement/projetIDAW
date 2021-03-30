<?php
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: DELETE");
        try {
            $pdo = new PDO('mysql:host=localhost;port=3306;dbname=tp3idaw;','root','');
        } catch(Exception $e) {
            alert("Exception reçue : ", $e->getMessage(), '\n');}
        //if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['id'])) {
            $sql = "DELETE FROM aliment WHERE id_aliment=:id";
        
            $query = $pdo->prepare($sql);
            $id = (int) $_GET['id'];
        
            $query->bindValue(':id',$id, PDO::PARAM_INT);
            $query->execute();
        //}
?>