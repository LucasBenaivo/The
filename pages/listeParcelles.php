<?php

 include('sa_fonction_1.php');

    $tableName = "sa_parcelles";
    $data = readRecord($tableName);

    echo json_encode($data);

?>