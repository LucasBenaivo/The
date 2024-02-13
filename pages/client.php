<?php
 include('../inc/sa_fonction.php');

 $tableName = "sa_client";
 $records = readRecord($tableName);

 echo json_encode($records);

?>