<?php
// Include the functions.php file
require_once 'functionsTokypart1.php';
require_once 'connectToky.php';

// Initialize the database connection
$db = dbConnect();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the values to be inserted
    $categorie = $_POST['categorie'];

    // Call the insertCategorieDepense function
    $result = insertCategorieDepense($db, $categorie);

    // Check the result and display a message
    if ($result['status'] == 'success') {
        echo 'La catégorie de dépense a été ajoutée avec succès.';
    } else {
        echo 'Une erreur est survenue lors de l\'ajout de la catégorie de dépense.';
    }
}
?>
