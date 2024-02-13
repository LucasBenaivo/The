<?php
include('sa_fonction.php');

function calculateDifference($startDate, $endDate) {
    $mysqli = new mysqli("172.20.0.167", "ETU002566", "bgjbX1Gm8vlM", "db_p16_ETU002566");
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
    $mysqli = new mysqli("172.20.0.167", "ETU002566", "bgjbX1Gm8vlM", "db_p16_ETU002566");
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
        //echo "Rendement mis à jour avec succès!";
    } else {
        //echo "Aucun mois trouvé entre les dates spécifiées.";
    }
    $stmt-> close();
    $mysqli->close();
}

function getRecette($start_date, $end_date) {
    $mysqli = connecter();
    $query = "SELECT SUM(montant) AS recette FROM Vente WHERE dateVente BETWEEN :start_date AND :end_date";
    $stmt = $mysqli->prepare($query);
    $stmt->bindParam(':start_date', $start_date, PDO::PARAM_STR);
    $stmt->bindParam(':end_date', $end_date, PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $recette = $row['recette'];
    return $recette;
}

function getTotalCueillette($start_date, $end_date) {
    $pdo = connecter(); // Assuming connecter() returns a PDO instance
    $query = "SELECT SUM(poids) AS totalCueillette FROM cueillette WHERE date BETWEEN :start_date AND :end_date";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':start_date', $start_date, PDO::PARAM_STR);
    $stmt->bindParam(':end_date', $end_date, PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $totalCueillette = $row['totalCueillette'];
    return $totalCueillette;
}


function getTotalDepense($start_date, $end_date) {
    $pdo = connecter(); // Assuming connecter() returns a PDO instance
    $query = "SELECT SUM(montant) AS depense FROM depense WHERE date BETWEEN :start_date AND :end_date";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':start_date', $start_date, PDO::PARAM_STR);
    $stmt->bindParam(':end_date', $end_date, PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $depense = $row['depense'];
    return $depense;
}

function getBenefice($startDate, $end_date) {
    $recette = getRecette($startDate, $end_date);
    $depense = getTotalDepense($startDate, $end_date);

    return $recette - $depense;
}


function getPrixDeRevient($start_date_cueillette, $end_date_cueillette, $start_date_vente, $end_date_vente) {
    $pdo = connecter(); // Assuming connecter() returns a PDO instance
    $query = "SELECT  
                ((SELECT SUM(montant) FROM cueilleurSalaire) +  
                (SELECT SUM(montant) FROM Vente WHERE dateVente BETWEEN :start_date_vente AND :end_date_vente)) /
                (SELECT SUM(poids) FROM cueillette WHERE date BETWEEN :start_date_cueillette AND :end_date_cueillette)  
                AS result";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':start_date_vente', $start_date_vente, PDO::PARAM_STR);
    $stmt->bindParam(':end_date_vente', $end_date_vente, PDO::PARAM_STR);
    $stmt->bindParam(':start_date_cueillette', $start_date_cueillette, PDO::PARAM_STR);
    $stmt->bindParam(':end_date_cueillette', $end_date_cueillette, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC)['result'];
    return $result;
}




?>
