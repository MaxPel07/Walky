<?php
require '../includes/db.php'

// Vérifier si les données POST existent
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $conn->real_escape_string($_POST['nom']);
    $prenom = $conn->real_escape_string($_POST['prenom']);
    $pseudo = $conn->real_escape_string($_POST['pseudo']);
    $email = $conn->real_escape_string($_POST['email']);

    // Validation des champs avec regex côté serveur
    if (!preg_match("/^[a-zA-Z]+$/", $nom)) {
        die("Nom invalide.");
    }
    if (!preg_match("/^[a-zA-Z]+$/", $prenom)) {
        die("Prénom invalide.");
    }
    if (!preg_match("/^[a-zA-Z0-9_]+$/", $pseudo)) {
        die("Pseudo invalide.");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Email invalide.");
    }

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO users (nom, prenom, pseudo, email) VALUES ('$nom', '$prenom', '$pseudo', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Compte créé avec succès!";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
