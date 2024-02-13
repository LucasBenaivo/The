<?php

 include('sa_fonction.php');

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data = array(
        "numero" => $_POST['numero'],
        "id_the" => $_POST['idThe'],
        "surface" => $_POST['surface']
    );
    $tableName = "sa_parcelles";
    createRecord($tableName,$data);
}


?>