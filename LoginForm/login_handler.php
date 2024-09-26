<?php
session_start();

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if email exists
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user data
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            echo "Login successful! Welcome, " . $_SESSION['username'];
            // Redirect to a dashboard or homepage
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with this email!";
    }
}

$conn->close();
?>
