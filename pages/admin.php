<?php
 include('../inc/sa_fonction.php');

 $tableName = "tea_admin";
 $records = readRecord($tableName);

 echo json_encode($records);

?>