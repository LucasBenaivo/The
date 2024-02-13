<?php
include('result.php');
// Récupérer les dates de début et de fin à partir des données POST
$date_debut = $_POST['datedeb'];
$date_fin = $_POST['datefin'];

// Appeler les fonctions et récupérer les résultats
$difference = calculateDifference($date_debut, $date_fin);
$updateStatus = updateRendement($date_debut, $date_fin);
$recette = getRecette($date_debut, $date_fin);
$totalCueillette = getTotalCueillette($date_debut, $date_fin);
$totalDepense = getTotalDepense($date_debut, $date_fin);
$benefice=getBenefice($date_debut, $date_fin);
$prixrevient=getPrixDeRevient($date_debut, $date_fin, $date_debut, $date_fin);

// Créer un tableau avec les résultats de chaque fonction
$results = array(
    'difference' => $difference,
    'updateStatus' => $updateStatus,
    'recette' => $recette,
    'totalCueillette' => $totalCueillette,
    'totalDepense' => $totalDepense,
    'benefice' => $benefice,
    'prixrevient' => $prixrevient
);

// Convertir le tableau en JSON et l'envoyer
echo json_encode($results);
?>