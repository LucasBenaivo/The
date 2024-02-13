<?php
 include('sa_fonction.php');

 $tableName = "configCueilleur";
 $data = array(
    "id_cueilleur" => $_POST['cueilleur'] ,
    "poidsMin" => $_POST['poid_min'],
    "bonus" => $_POST['bonus'],
    "minus" => $_POST['mallus']
 );
 
 createRecord($tableName, $data);

 header('Location:../pages/newPoids.php')
?>