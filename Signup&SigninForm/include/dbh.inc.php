<?php

$serverName = "localhost";
$dbUserName = "root";
$dbpassword = '1234';
$dbName = "sample";

$conn = mysqli_connect($serverName,$dbUserName, $dbpassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

    
} 
