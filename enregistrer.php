<?php
// Configuration de la connexion à la base de données
$servername = "mysql4.ouiheberg.com:3306"; // Adresse du serveur MySQL
$username = "u920_Qsku1ayIZh"; // Nom d'utilisateur MySQL
$password = "d2H.sHq9+V0U^kCrpFdvveh="; // Mot de passe MySQL
$dbname = "s920_pmb"; // Nom de la base de données MySQL

// Récupération du texte envoyé via la requête POST
$texte = $_POST['texte'];

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Préparation de la requête SQL pour insérer le texte dans la base de données
$sql = "INSERT INTO texts (text) VALUES ('$texte')";

// Exécution de la requête SQL
if ($conn->query($sql) === TRUE) {
    echo "Le texte a été enregistré avec succès dans la base de données !";
} else {
    echo "Erreur lors de l'enregistrement du texte dans la base de données : " . $conn->error;
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
