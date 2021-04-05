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
                echo "<p>Connecté en tant que : <span id='sess'>".$_SESSION['login']."</span> <button class=\"changeuser\">Changer d'utilisateur...</button></p>";
            } else {
                echo "<script>window.location.replace('connexion.php');</script>";
            }
            ?>
    </header>
    <script>
        $(document).ready( function () {
            $("header").on('click','.changeuser',function() {
                document.location.href="connexion.php";     
                });
            })
    </script>
    <body>
        <div class="main-container">