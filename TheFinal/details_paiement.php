<?php

 include('sa_fonction.php');

    $tableName = "v_details_paiement";
    $data = readRecord($tableName);

    echo json_encode($data);

?>