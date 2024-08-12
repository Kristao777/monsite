<?php

    // Connexion à la base de données
    require_once(__DIR__.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR.'bd.php');

    // Affichage du header
    require_once(__DIR__.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'header.php');

    // Affichage du controleur d'accueil
    require_once(__DIR__.DIRECTORY_SEPARATOR.'controllers'.DIRECTORY_SEPARATOR.'homeController.php');

    // Affichage du footer
    require_once(__DIR__.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'footer.php');

?>