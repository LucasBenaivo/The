<?php
// Include the functions.php file
require_once 'functionsTokypart1.php';
require_once 'connectToky.php';

// Initialize the database connection
$db = dbConnect();

// Check if an ID has been passed through GET
    // Retrieve the ID from the GET variable
    $id = $_POST['id'];

    // Call the getCategorieDepenseById function with the ID
    $cueilleur = getCategorieDepenseById($db, $id);

    // Output the result in JSON format
    header('Content-Type: application/json');
    echo json_encode($cueilleur);

?>
