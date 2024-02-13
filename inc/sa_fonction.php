<?php
require('connection.php');
function checkLogin($mail, $mdp) {
    $conn = dbConnect();
    $requete = "SELECT * FROM tea_admin WHERE mail=:mail AND mdp=:mdp";
    $stmt = $conn->prepare($requete);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':mdp', $mdp);
    $stmt->execute();
    return $stmt->rowCount() > 0;
}

function checkLoginClient($mail, $mdp) {
    $conn = dbConnect();
    $requete = "SELECT * FROM sa_client WHERE mail=:mail AND mdp=:mdp";
    $stmt = $conn->prepare($requete);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':mdp', $mdp);
    $stmt->execute();
    return $stmt->rowCount() > 0;
}

function createRecord($tableName, $data) {
    $conn = dbConnect();
    $columns = implode(", ", array_keys($data));
    $placeholders = ":" . implode(", :", array_keys($data));
    $sql = "INSERT INTO $tableName ($columns) VALUES ($placeholders)";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
        return "Enregistrement créé avec succès";
    } catch(PDOException $e) {
        return "Erreur lors de la création de l'enregistrement : " . $e->getMessage();
    }
}

function readRecord($tableName, $condition = null) {
    $conn = dbConnect();
    if ($condition !== null) {
        $sql = "SELECT * FROM $tableName WHERE $condition";
    } else {
        $sql = "SELECT * FROM $tableName";
    }
    $stmt = $conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function updateRecord($tableName, $condition, $data) {
    $conn = dbConnect();
    $updateValues = "";
    foreach ($data as $key => $value) {
        $updateValues .= "$key = :$key, ";
    }
    $updateValues = rtrim($updateValues, ", ");
    $sql = "UPDATE $tableName SET $updateValues WHERE $condition";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
        return "Enregistrement mis à jour avec succès";
    } catch(PDOException $e) {
        return "Erreur lors de la mise à jour de l'enregistrement : " . $e->getMessage();
    }
}

function deleteRecord($tableName, $condition) {
    $conn = dbConnect();
    $sql = "DELETE FROM $tableName WHERE $condition";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return "Enregistrement supprimé avec succès";
    } catch(PDOException $e) {
        return "Erreur lors de la suppression de l'enregistrement : " . $e->getMessage();
    }
}
?>