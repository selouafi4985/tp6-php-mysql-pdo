<?php

$host = "localhost";
$dbname = "tp_php";
$username = "root";
$password = "";

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {

    die("Erreur de connexion : " . $e->getMessage());

}

?>


<!-- PDO::ATTR_ERRMODE
= quel mode utiliser pour les erreurs

PDO::ERRMODE_EXCEPTION
= transformer les erreurs en exceptions -->