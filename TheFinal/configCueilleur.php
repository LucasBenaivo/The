<?php
 include('sa_fonction.php');

 $tableName = "configCueilleur";
 $data = array(
    "id_cueilleur" => 1,
    "poidsMin" => 100.0,
    "bonus" => 10,
    "minus" => 5
 );
 
 createRecord($tableName, $data);
?>