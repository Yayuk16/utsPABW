<?php

$db_host = "localhost:3306";
$db_user = "mycrud";
$db_pass = "Hgza01*2";
$db_name = "mycrud";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("ERROR: " . $e->getMessage());
}

?>