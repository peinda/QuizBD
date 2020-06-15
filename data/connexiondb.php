<?php

    $host = "localhost";
    $username ="root";
    $password = "";
    $database = "quizzbd";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $username, $password);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e) {
        die("Une erreur est survenue lors de la connexion à la base de données");
    }

?>