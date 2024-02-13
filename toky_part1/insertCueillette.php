<?php
// Include the functions.php file
require_once 'functionsTokypart1.php';
require_once 'connectToky.php';

// Initialize the database connection
$db = dbConnect();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the values to be inserted
    $date = $_POST['date'];
    $id_cueilleur = $_POST['id_cueilleur'];
    $id_parcelle = $_POST['id_parcelle'];
    $poids = $_POST['poids'];

    // Call the insertCueillette function
    $result = insertCueillette($db, $date, $id_cueilleur, $id_parcelle, $poids);

    // Check the result and display a message
    if ($result['status'] == 'success') {
        echo 'Les données de cueillette ont été ajoutées avec succès.';
    } else {
        echo 'Une erreur est survenue lors de l\'ajout des données de cueillette.';
    }
}
?>
