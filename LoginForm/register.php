<?php
// Database connection
$servername = "localhost";
$db_username = "root";
$db_password = "1234";
$dbname = "user_system";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "connection successfully";

$conn->close();
?>
