<?php
// Include the functions.php file
require_once 'functionsTokypart1.php';
require_once 'connectToky.php';

// Initialize the database connection
$db = dbConnect();

// Define the values to be inserted
    $nom = $_POST['nom'];
    $occupationParM2 = $_POST['occupationParM2'];
    $rendement = $_POST['rendement'];

// Call the insertThe function
$result = insertThe($db, $nom, $occupationParM2, $rendement);

// Check the result and display a message
if ($result['status'] == 'success') {
    echo 'La nouvelle entrée a été ajoutée avec succès.';
} else {
    echo 'Une erreur est survenue lors de l\'ajout de la nouvelle entrée.';
}
?>
