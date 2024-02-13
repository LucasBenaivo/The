<?php

 include('sa_fonction.php');


    $containerValue = $_POST['container'];
    $tableName = "details_parcelle";
    $condition = "id_parcelle = $containerValue";
    $data = readRecord($tableName,$condition);

    echo json_encode($data);




?>