<?php
include('sa_fonction.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['months'])) {
        $months = $_POST['months']; // This is now an array of the selected month values
        
        // Call your function to insert the values into the database
        insertMultipleValues($months);
    } else {
        echo "No months were selected.";
    }
}
 header('Location:../pages/configMois.php')
?>
