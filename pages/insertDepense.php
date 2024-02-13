<?php
// Inclure les fichiers nécessaires
require_once 'functionsTokypart1.php';
require_once 'connectToky.php';

// Initialiser la connexion à la base de données
$db = dbConnect();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Définir les valeurs à insérer
    $date = $_POST['date'];
    $id_categorie_dep = $_POST['id_categorie_dep'];
    $montant = $_POST['montant'];

    // Appeler la fonction insertDepense
    $result = insertDepense($db, $date, $id_categorie_dep, $montant);

    // Vérifier le résultat et afficher un message
    if ($result['status'] == 'success') {
        echo 'La dépense a été ajoutée avec succès.';
    } else {
        echo 'Une erreur est survenue lors de l\'ajout de la dépense.';
    }
}
?>
