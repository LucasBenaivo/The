<?php
 include('sa_fonction.php');
 
 $valuesToInsert = explode(',', $_POST['moisPousse']);

 $message = insertMultipleValues($valuesToInsert);
 echo $message;


?>


