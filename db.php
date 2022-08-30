<?php

require "config/constants.php";

// $servername = HOST;
// $username = USER;
// $password = PASSWORD;
// $db = DATABASE_NAME;
$dbhost ="localhost";
$dbuser ="root";
$dbpass ="root";
$dbname ="ReinMart ecom";
$dbport=8889;

// Create connection
$con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>