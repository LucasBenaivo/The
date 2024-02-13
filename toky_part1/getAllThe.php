<?php
require_once 'functionsTokypart1.php';
require_once 'connectToky.php';

// Assuming connectToDatabase() is a function in fonction.php that returns a PDO instance
$pdo = dbConnect();

// Call the getAllThe function with the PDO instance
$things = getAllThe($pdo);

// Output the results in JSON format
header('Content-Type: application/json');
echo json_encode($things);
?>
