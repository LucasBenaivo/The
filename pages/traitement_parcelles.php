<?php

 include('sa_fonction_1.php');

 
    $data = array(
        "numero" => $_POST['numero'],
        "id_the" => $_POST['the'],
        "surface" => $_POST['surface']
    );
    $tableName = "sa_parcelles";
    createRecord($tableName,$data);
    header("Location: insertionParcelle.php");



?>