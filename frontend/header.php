<!DOCTYPE html>
<html>
    <head>
    <title>iℳangerℳieux</title>
        <link rel="stylesheet" href="css/stylesheet.css" type="text/css"
            media="screen" title="default" charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/datatables.css">
        <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    </head>
    <header class="bandeau_haut">
        <h1 class="titre">iℳangerℳieux</h1>
        <?php session_start(); 
            if(isset($_COOKIE['login'])) {
                $_SESSION['login']=$_COOKIE['login'];
            }
            if(isset($_SESSION['login'])) {
                echo 'Bonjour '.$_SESSION['login'];
            } else {
                echo "<script>window.location.replace('connexion.php');</script>";
            }
            ?>
    </header>
    <body>
        <div class="main-container">