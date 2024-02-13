<?php
    require("../inc/function.php");

    header('Content-Type: application/json');
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $confirmationConnection = connectionValidation($mail, $mdp);
    echo $confirmationConnection;
?>