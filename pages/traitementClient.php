<?php
session_start();
include('../inc/sa_fonction.php');

$mail = $_POST['email'];
$mdp = $_POST['password'];

// echo($mail);
// echo($mdp);


$id = checkLoginClient($mail, $mdp);
echo($id);
if ($id > 0) {
    header("Location: accueilFront.php");
} else {
    header("Location: index.html");
 }
?>
