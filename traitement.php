<?php
// Connexion à la base de données
$serveur = "nom_du_serveur";
$utilisateur = "nom_utilisateur";
$mot_de_passe = "mot_de_passe";
$base_de_donnees = "nom_base_de_donnees";

$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérification de la connexion
if (!$connexion) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// Récupération du numéro de livre à partir du formulaire
$numero_livre = $_POST['numero'];

// Exécution de la requête SQL pour modifier les exemplaires
$sql = "UPDATE nom_de_la_table_exemplaires SET numero_exemplaire = 'zPILON' WHERE numero_livre = '$numero_livre'";

if (mysqli_query($connexion, $sql)) {
    echo "Les exemplaires ont été modifiés avec succès.";
} else {
    echo "Erreur lors de la modification des exemplaires : " . mysqli_error($connexion);
}

// Fermeture de la connexion à la base de données
mysqli_close($connexion);
?>
