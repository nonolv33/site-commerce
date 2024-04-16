<?php
// Vérification que le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom_personne = $_POST["nom_personne"];
    $prenom_personne = $_POST["prenom_personne"];
    $telephone = $_POST["telephone"];
    $commande = $_POST["commande"];
    $date_recuperation = $_POST["date_recuperation"];

    // Connexion à la base de données
    $conn = mysqli_connect("localhost", "root", "", "boucherie_db");

    // Vérifier la connexion
    if (!$conn) {
        die("La connexion à la base de données a échoué : " . mysqli_connect_error());
    }

    // Préparer la requête SQL pour insérer les données dans la table commande
    $sql_commande = "INSERT INTO commande (nom_personne, prenom_personne, commande, date_recuperation) VALUES ('$nom_personne', '$prenom_personne',  '$commande', '$date_recuperation')";

    // Exécuter la requête SQL
    if (mysqli_query($conn, $sql_commande)) {
        echo "La commande a été enregistrée avec succès.";
    } else {
        echo "Erreur lors de l'enregistrement de la commande : " . mysqli_error($conn);
    }

    // Requête SQL pour insérer les données dans la table personne
$sql_personne = "INSERT INTO personne (nom_personne, prenom_personne, telephone, cp, ville) VALUES ('$nom_personne', '$prenom_personne', '$telephone','$cp', '$ville')";

// Exécuter la requête pour la table personne
if ($conn->query($sql_personne) === TRUE) {
    echo "Données insérées avec succès dans la table personne.";
} else {
    echo "Erreur lors de l'insertion des données dans la table personne : " . $conn->error;
}
    // Fermer la connexion à la base de données
    mysqli_close($conn);
} else {
    // Redirection vers la page du formulaire si le formulaire n'a pas été soumis
    header("Location: votre_page_de_formulaire.php");
    exit();
}
?>
