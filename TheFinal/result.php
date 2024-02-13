<?php
include('sa_fonction.php');

function calculateDifference($startDate, $endDate) {
    $mysqli = new mysqli("localhost", "root", "", "The");
    if ($mysqli->connect_error) {
        die("Connexion échouée: " . $mysqli->connect_error);
    }
    $sql = "SELECT 
    p1.id,
    (p1.total_poids - COALESCE(p2.total_poids, 0)) AS difference
FROM 
    (SELECT p.id, (rendement * surface) AS total_poids
     FROM the
     JOIN sa_parcelles p ON the.id = p.id_the
     GROUP BY p.id) AS p1
LEFT JOIN 
    (SELECT id_parcelle, SUM(poids) AS total_poids
     FROM cueillette
     WHERE date BETWEEN ? AND ?
     GROUP BY id_parcelle) AS p2
ON p1.id = p2.id_parcelle;";

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $startDate, $endDate);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $stmt->close();
    $mysqli->close();
    return $data;
}

function updateRendement($start_date, $end_date) {
    $mysqli = new mysqli("localhost", "root", "", "the");
    if ($mysqli->connect_error) {
        die("Connexion échouée: " . $mysqli->connect_error);
    }
    $sql = "SELECT idMois FROM MoisPoussee WHERE idMois BETWEEN ? AND ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $start_date, $end_date);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $sql_update = "UPDATE the SET rendement = rendement * 2";
        $mysqli->query($sql_update);
        echo "Rendement mis à jour avec succès!";
    } else {
        echo "Aucun mois trouvé entre les dates spécifiées.";
    }
    $stmt-> close();
    $mysqli->close();
}

function getRecette($start_date, $end_date) {
    $mysqli = connecter();
    $query = "SELECT SUM(montant) AS recette FROM Vente WHERE dateVente BETWEEN ? AND ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ss", $start_date, $end_date);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $recette = $row['recette'];
    $stmt->close();
    $mysqli->close();
    return $recette;
}

function getTotalCueillette($start_date, $end_date) {
    $mysqli = connecter();
    $query = "SELECT SUM(poids) AS totalCueillette FROM cueillette WHERE date BETWEEN ? AND ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ss", $start_date, $end_date);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $recette = $row['recette'];
    $stmt->close();
    $mysqli->close();
    return $recette;
}

function getTotalDepense($start_date, $end_date) {
    $mysqli = connecter();
    $query = "SELECT SUM(montant) AS depense FROM depense WHERE dateVente BETWEEN ? AND ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ss", $start_date, $end_date);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $recette = $row['recette'];
    $stmt->close();
    $mysqli->close();
    return $recette;
}


?>
