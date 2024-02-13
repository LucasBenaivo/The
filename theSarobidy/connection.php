<?php
function dbConnect() {
    return new PDO("mysql:host=localhost;dbname=the", "root", "");
}
?>
