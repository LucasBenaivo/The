<?php
 include('sa_fonction.php');


        $numero = $_POST['numero'];
    
        $tableName = "sa_parcelles";
        $condition = "numero = $numero";
        $records = readRecord($tableName,$condition);

        echo json_encode($records);

?>