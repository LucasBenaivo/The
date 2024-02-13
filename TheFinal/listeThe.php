<?php
 include('sa_fonction.php');

 $tableName = "The";
 
 $data = readRecord($tableName);
 print_r($data);
?>