<?php
function insertThe($db, $nom, $occupationParM2, $rendement) {
    $sql = "INSERT INTO the (nom, occupation_par_m2, rendement) VALUES (:nom, :occupationParM2, :rendement)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':occupationParM2', $occupationParM2);
    $stmt->bindParam(':rendement', $rendement);

    if ($stmt->execute()) {
        return ['status' => 'success', 'message' => 'Entrée ajoutée avec succès'];
    } else {
        return ['status' => 'error', 'message' => 'Erreur lors de l\'ajout de l\'entrée'];
    }
}

function getAllThe($db) {
  $sql = "SELECT * FROM the";
  $stmt = $db->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function updateThe($db, $id, $nom, $occupationParM2, $rendement) {
    $sql = "UPDATE the SET nom = :nom, occupation_par_m2 = :occupationParM2, rendement = :rendement WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindParam(':occupationParM2', $occupationParM2, PDO::PARAM_STR);
    $stmt->bindParam(':rendement', $rendement, PDO::PARAM_STR);

    if ($stmt->execute()) {
        return ['status' => 'success', 'message' => 'Mise à jour réussie', 'affectedRows' => $stmt->rowCount()];
    } else {
        return ['status' => 'error', 'message' => 'Erreur lors de la mise à jour'];
    }
}

function insertCueilleur($db, $nom, $genre, $dtn) {
    $sql = "INSERT INTO cueilleur (nom, genre, dtn) VALUES (:nom, :genre, :dtn)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':genre', $genre);
    $stmt->bindParam(':dtn', $dtn);

    if ($stmt->execute()) {
        return ['status' => 'success', 'message' => 'Entrée ajoutée avec succès'];
    } else {
        return ['status' => 'error', 'message' => 'Erreur lors de l\'ajout de l\'entrée'];
    }
}

function getCueilleurById($db, $id) {
    $sql = "SELECT * FROM cueilleur WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getAllCueilleur($db) {
    $sql = "SELECT * FROM cueilleur";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertCategorieDepense($db, $categorie) {
    $sql = "INSERT INTO categorie_depense (categorie) VALUES (:categorie)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':categorie', $categorie);

    if ($stmt->execute()) {
        return ['status' => 'success', 'message' => 'Catégorie ajoutée avec succès'];
    } else {
        return ['status' => 'error', 'message' => 'Erreur lors de l\'ajout de la catégorie'];
    }
}

function getCategorieDepenseById($db, $id) {
    $sql = "select * from categorie_depense where id= :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getAllCategorieDepense($db) {
    $sql = "SELECT * FROM categorie_depense";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function updateConfigSalaire($db, $valeur) {
    $sql = "UPDATE config_salaire SET valeur = :valeur";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':valeur', $valeur, PDO::PARAM_STR);

    if ($stmt->execute()) {
        return ['status' => 'success', 'message' => 'Mise à jour réussie', 'affectedRows' => $stmt->rowCount()];
    } else {
        return ['status' => 'error', 'message' => 'Erreur lors de la mise à jour'];
    }
}

function getConfigSalaire($db) {
  $sql = "select * from config_salaire";
  $stmt = $db->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertCueillette($db, $date, $id_cueilleur, $id_parcelle, $poids) {
    // Préparez la requête SQL avec des paramètres nommés
    $sql = "INSERT INTO cueillette (date, id_cueilleur, id_parcelle, poids) VALUES (:date, :id_cueilleur, :id_parcelle, :poids)";
    
    // Préparez la déclaration
    $stmt = $db->prepare($sql);
    
    // Liez les paramètres aux variables
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':id_cueilleur', $id_cueilleur);
    $stmt->bindParam(':id_parcelle', $id_parcelle);
    $stmt->bindParam(':poids', $poids);
    
    // Exécutez la requête et vérifiez si elle a réussi
    if ($stmt->execute()) {
        return ['status' => 'success', 'message' => 'Données insérées avec succès'];
    } else {
        return ['status' => 'error', 'message' => 'Erreur lors de l\'insertion des données'];
    }
}

function getAllParcelles($db) {
    $sql = "SELECT * FROM sa_parcelles";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertDepense($db, $date, $id_categorie_dep, $montant) {
    // Préparez la requête SQL avec des paramètres nommés
    $sql = "INSERT INTO depense (date, id_categorie_dep, montant) VALUES (:date, :id_categorie_dep, :montant)";
    
    // Préparez la déclaration
    $stmt = $db->prepare($sql);
    
    // Liez les paramètres aux variables
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':id_categorie_dep', $id_categorie_dep);
    $stmt->bindParam(':montant', $montant);
    
    // Exécutez la requête et vérifiez si elle a réussi
    if ($stmt->execute()) {
        return ['status' => 'success', 'message' => 'Dépense ajoutée avec succès'];
    } else {
        return ['status' => 'error', 'message' => 'Erreur lors de l\'ajout de la dépense'];
    }
}


?>
