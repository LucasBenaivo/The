<?php
 include('sa_fonction_1.php');

 $tableName = "the";
 $records = readRecord($tableName);

 echo json_encode($records);

?>