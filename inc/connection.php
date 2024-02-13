<?php
function dbConnect() {
    return new PDO("mysql:host=172.20.0.167;dbname=db_p16_ETU002566", "ETU002566", "bgjbX1Gm8vlM");
}
$records =dbConnect();
?>
