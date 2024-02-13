<?php
session_start();
include('../inc/sa_fonction.php');

$mail = $_POST['mail'];
$mdp = $_POST['mdp'];


$id = checkLogin($mail, $mdp);
echo($id);

if ($id > 0) {
    header("Location: accueilBack.php");
} else {
    header("Location: backOfficeLogin.html");
}
?>
