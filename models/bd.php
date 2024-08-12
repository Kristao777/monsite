<?php

    // Connexion à la base de données
    $host = "localhost";
    $dbname = "monmvc";
    $user = "root";
    $password = "";
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

?>