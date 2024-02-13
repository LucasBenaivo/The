<?php
  include('../inc/sa_fonction.php');

  $data = array(
    "numero" => $_POST['parcelle'],
    "id_the" => $_POST['the'],
    "surface" => $_POST['surface']
);
  $id = $_POST['parcelle'];
  $condition = "id = $id";
  $tableName = "sa_parcelles";
  updateRecord( $tableName, $condition, $data);

  header('Location: updateParcelle.php');
?>