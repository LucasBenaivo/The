<?php

 include('sa_fonction.php');

if(isset($_POST['container'])) {
    $containerValue = $_POST['container'];
    $tableName = "details_parcelle";
    $condition = "id_parcelle = $containerValue";
    $data = readRecord($tableName,$condition);

    echo json_encode($data);

} else {
    echo "Aucune valeur de container reçue.";
}



?>