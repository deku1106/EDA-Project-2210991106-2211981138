<?php
$servername = "localhost";
$username = "root";  
$password = ""; // XAMPP default MySQL root password is empty
$dbname = "edoc"; 

$database = new mysqli($servername, $username, $password, $dbname);

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}
