<?php

function safe_json_encode($value){
if (version_compare(PHP_VERSION, '5.4.0') >= 0) {
    $encoded = json_encode($value, JSON_PRETTY_PRINT);
} else {
    $encoded = json_encode($value);
}
switch (json_last_error()) {
    case JSON_ERROR_NONE:
        return $encoded;
    case JSON_ERROR_DEPTH:
        return 'Maximum stack depth exceeded'; // or trigger_error() or throw new Exception()
    case JSON_ERROR_STATE_MISMATCH:
        return 'Underflow or the modes mismatch'; // or trigger_error() or throw new Exception()
    case JSON_ERROR_CTRL_CHAR:
        return 'Unexpected control character found';
    case JSON_ERROR_SYNTAX:
        return 'Syntax error, malformed JSON'; // or trigger_error() or throw new Exception()
    case JSON_ERROR_UTF8:
        $clean = utf8ize($value);
        return safe_json_encode($clean);
    default:
        return 'Unknown error'; // or trigger_error() or throw new 
Exception();
}
}

function utf8ize($mixed) {
if (is_array($mixed)) {
    foreach ($mixed as $key => $value) {
        $mixed[$key] = utf8ize($value);
    }
} else if (is_string ($mixed)) {
    return utf8_encode($mixed);
}
return $mixed;
}
header('Content-Type: application/json');
    try {
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=tp3idaw;','root','');
        $retour["success"] = true;
        $retour["message"] = "Connexion réussie";
    } catch(Exception $e) {
        $retour["success"] = false;
        $retour["message"] = "Connexion échouée";
    }
    if (isset($_GET['id'])) {
        $requete = $pdo->prepare("SELECT aliment.id_aliment, aliment.nom FROM aliment");
        $requete->execute();
    
        $retour["success"] = true;
        $retour["message"] = "Voici le journal";
        $retour["resultats"]["journal"] = $requete->fetchAll();
        echo safe_json_encode($retour["resultats"]["journal"]);
    }
    else{
    $requete = $pdo->prepare("SELECT journal.ind,aliment.nom,manger.quantite,journal.date FROM journal INNER JOIN manger ON journal.ind=manger.ind INNER JOIN aliment ON manger.id_aliment=aliment.id_aliment");
    $requete->execute();

    $retour["success"] = true;
    $retour["message"] = "Voici le journal";
    $retour["resultats"]["journal"] = $requete->fetchAll($fetch_style=PDO::FETCH_NUM);
    echo safe_json_encode($retour["resultats"]["journal"]);
    }
    ?>