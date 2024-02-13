<?php
 include('sa_fonction.php');
 
 $valuesToInsert = [1, 2, 3, 4, 5];

 $message = insertMultipleValues($valuesToInsert);
 echo $message;


?>