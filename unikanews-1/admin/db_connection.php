<?php

$servername = "localhost";
$username = "furkand7_unikanews"; //abc
$password = "unikanews"; //abc
$dbname = "furkand7_unikanews";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}

mysqli_query($conn, "SET NAMES 'utf8'"); 
mysqli_query($conn, "SET CHARACTER SET utf8"); 
mysqli_query($conn, "SET COLLATION_CONNECTION = 'utf8_general_ci'");

$mysqli = new mysqli($servername, $username, $password, $dbname);
$mysqli->set_charset("utf8");
?>
