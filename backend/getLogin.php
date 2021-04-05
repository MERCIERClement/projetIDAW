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
    if (isset($_GET['login'])) {
        $requete = $pdo->prepare("SELECT * FROM utilisateur where Login=:login");
        $requete->bindValue(':login',$_GET['login'], PDO::PARAM_STR);
        $requete->execute();
    
        $retour["success"] = true;
        $retour["message"] = "Voici le login";
        $retour["resultats"]["login"] = $requete->fetchAll();
        echo safe_json_encode($retour["resultats"]["login"]);
    }
    else{
    $requete = $pdo->prepare("SELECT * FROM utilisateur");
    $requete->execute();

    $retour["success"] = true;
    $retour["message"] = "Voici les login";
    $retour["resultats"]["login"] = $requete->fetchAll();
    echo safe_json_encode($retour["resultats"]["login"]);
    }
    ?>