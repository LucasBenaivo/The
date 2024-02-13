<?php
 include('sa_fonction.php');

 $tableName = "PrixVente";
 $data = array(
    "id_the" => $_POST['the'],
    "prixVente" => $_POST['prixThe']
 );
 
 createRecord($tableName, $data);
  header('Location:../pages/insertionPxVente.php')
?>