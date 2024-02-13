<?php
session_start();
include('../inc/sa_fonction.php');

$mail = $_POST['mail'];
$mdp = $_POST['mdp'];

$_SESSION['mail'] = $mail;
$_SESSION['mdp'] = $mdp;

$id = checkLogin($mail, $mdp);

if ($id > 0) {
    header("Location: accueilBack.php");
} else {
    header("Location: index.html");
}
?>
