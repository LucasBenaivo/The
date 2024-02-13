<?php
function connecter() {
    $serveur = "172.20.0.167";
    $utilisateur = "ETU002566";
    $motdepasse = "bgjbX1Gm8vlM";
    $basededonnees = "db_p16_ETU002566";

    $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);
    
    if ($connexion->connect_error) {
        die("La connexion a échoué : " . $connexion->connect_error);
    }

    return $connexion;
}
connecter();

?>
