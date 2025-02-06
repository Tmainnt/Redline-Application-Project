<?php

$server = "localhost"; /* Change is coming soon */
$username = "root";
$password = "";
$dbname = "redline";

$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection Failed " .$conn->connect_error);
} 
