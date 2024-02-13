<?php
  include('sa_fonction.php');

  $data = array(
    "id_the" => 1,
    "prixVente" => 10042.4
);

  $id = 1;
  $condition = "id_the = $id";
  $tableName = "PrixVente";
  updateRecord( $tableName, $condition, $data);
?>