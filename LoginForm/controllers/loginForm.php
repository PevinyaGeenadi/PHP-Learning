<?php

global $conn;
$heading = 'Login Form';

require __DIR__ . '/../views/login.view.php';

?>

<?php
include __DIR__ . '/../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user data from the database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify the password
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['user_id'] = $row['id'];

            // Redirect to the index page
            header('Location: ../controllers/index.php');
            exit();

        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found!";
    }
}

?>

