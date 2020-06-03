<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'alex');
define('DB_PASSWORD', 'Pa55w4rd');
define('DB_NAME', 'members');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
