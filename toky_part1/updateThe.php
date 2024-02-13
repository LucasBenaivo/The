<?php
// Include the functions.php file
require_once 'functionsTokypart1.php';
require_once 'connectToky.php';

// Initialize the database connection
$db = dbConnect(); // Assumes you have a dbConnect function defined elsewhere

// Check if form is submitted 
    // Retrieve form data
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $occupationParM2 = $_POST['occupationParM2'];
    $rendement = $_POST['rendement'];

    // Call the updateThe function
    $result = updateThe($db, $id, $nom, $occupationParM2, $rendement);

    // Display a message based on the result
    if ($result['status'] === 'success') {
        echo 'Mise à jour réussie: ' . $result['message'];
    } else {
        echo 'Erreur: ' . $result['message'];
    }

?>