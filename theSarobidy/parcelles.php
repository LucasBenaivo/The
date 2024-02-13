<?php
 include('sa_fonction.php');

 $tableName = "the";
 $records = readRecord($tableName);

 echo json_encode($records);

?>