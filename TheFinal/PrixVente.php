<?php
 include('sa_fonction.php');

 $tableName = "PrixVente";
 $data = array(
    "id_the" => 1,
    "prixVente" => 500.25
 );
 
 createRecord($tableName, $data);
?>