<?php
// Include the functions.php file
require_once 'functionsTokypart1.php';
require_once 'connectToky.php';

// Initialize the database connection
$db = dbConnect();

// Check if the form has been submitted
    // Define the values to be inserted
    $nom = $_POST['nom'];
    $genre = $_POST['genre'];
    $dtn = $_POST['dtn'];

    // Call the insertCueilleur function
    $result = insertCueilleur($db, $nom, $genre, $dtn);

    // Check the result and display a message
    if ($result['status'] == 'success') {
        echo 'Le nouveau cueilleur a été ajouté avec succès.';
    } else {
        echo 'Une erreur est survenue lors de l\'ajout du nouveau cueilleur.';
    }

?>