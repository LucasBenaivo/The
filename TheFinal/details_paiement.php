<?php
include('sa_fonction.php');

// Connexion à la base de données
$connexion = connecter();

// Préparation de la requête SQL
$date_debut = $_POST['datedeb'];
$date_fin = $_POST['datefin'];
//$tableName = "";
//$condition = "dtn ";
$query = "SELECT * FROM v_details_paiement  WHERE dtn BETWEEN :date_debut AND :date_fin";

// Préparation de la requête
$stmt = $connexion->prepare($query);

// Liaison des paramètres
$stmt->bindParam(':date_debut', $date_debut);
$stmt->bindParam(':date_fin', $date_fin);

// Exécution de la requête
$stmt->execute();

// Récupération des résultats
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Encodage des résultats en JSON
echo json_encode($data);
?>
