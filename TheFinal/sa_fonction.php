<?php
include('sa_connection.php');


function checkLogin($mail,$mdp){
    $connexion = connecter();
    $requete = "SELECT * FROM tea_admin WHERE mail='$mail' AND mdp='$mdp'";
    $resultat = $connexion->query($requete);

    if ($resultat && $resultat->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function insertMultipleValues($values) {
    $connexion = connecter();

    foreach ($values as $value) {
        $sql = "INSERT INTO MoisPoussee (idMois) VALUES ($value)";
        if ($connexion->query($sql) !== TRUE) {
            return "Erreur lors de l'insertion des valeurs : " . $connexion->error;
        }
    }
    return "Valeurs insérées avec succès";
}


function checkLoginClient($mail,$mdp){
    $connexion = connecter();
    $requete = "SELECT * FROM sa_client WHERE mail='$mail' AND mdp='$mdp'";
    $resultat = $connexion->query($requete);

    if ($resultat && $resultat->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}


function createRecord($tableName, $data) {
    $conn = connecter();
    $columns = implode(", ", array_keys($data));
    $values = "'" . implode("', '", array_values($data)) . "'";
    $sql = "INSERT INTO $tableName ($columns) VALUES ($values)";
    if ($conn->query($sql) === TRUE) {
        return "Enregistrement créé avec succès";
    } else {
        return "Erreur lors de la création de l'enregistrement : " . $conn->error;
    }
}


function readRecord($tableName, $condition = null) {
    $conn = connecter();       
    if ($condition !== null) {
       $sql = "SELECT * FROM $tableName WHERE $condition";
    } else {
        $sql = "SELECT * FROM $tableName";
    }      
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $records = array();
        while ($record = $result->fetch_assoc()) {
            $records[] = $record;
        }
        return $records;
    } else {
        return array(); 
    }
}

function updateRecord( $tableName, $condition, $data) {
    $conn = connecter();
    $updateValues = "";
    foreach ($data as $key => $value) {
        $updateValues .= "$key = '$value', ";
    }
    $updateValues = rtrim($updateValues, ", ");
    $sql = "UPDATE $tableName SET $updateValues WHERE $condition";
    if ($conn->query($sql) === TRUE) {
        return "Enregistrement mis à jour avec succès";
    } else {
        return "Erreur lors de la mise à jour de l'enregistrement : " . $conn->error;
    }
}

function deleteRecord($tableName, $condition) {
    $conn = connecter();
    $sql = "DELETE FROM $tableName WHERE $condition";
    if ($conn->query($sql) === TRUE) {
        return "Enregistrement supprimé avec succès";
    } else {
        return "Erreur lors de la suppression de l'enregistrement : " . $conn->error;
    }
}



?>