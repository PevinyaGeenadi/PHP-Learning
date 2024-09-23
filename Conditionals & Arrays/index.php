<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h1>Books Name</h1>

    <?php
    // Example array for the business
    $business = [
        'name' => 'Laracasts',
        'cost' => 15,
        'categories' => ["Testing", "PHP", "JavaScript"]
    ];

    // Database connection (adjust with your actual DB credentials)
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "my_app";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Function to register a user
    function register($user) {
        global $conn;

        // 1. Create the user record in the database
        $username = $user['username'];
        $email = $user['email'];
        $password = password_hash($user['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "New user record created successfully. ";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            return;
        }

        // 2. Log the user in (basic session setup)
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;

        echo "User logged in successfully.";

        // 3. Send a welcome email
        $to = $email;
        $subject = "Welcome to the platform!";
        $message = "Hi $username, welcome to our platform. We are glad to have you!";
        $headers = "From: no-reply@yourdomain.com";

        if (mail($to, $subject, $message, $headers)) {
            echo "Welcome email sent to $email.";
        } else {
            echo "Failed to send welcome email.";
        }


    }

    // Example user array to test the function
    $user = [
        'username' => 'testuser',
        'email' => 'testuser@example.com',
        'password' => 'password123'
    ];

    // Register the user
    register($user);

    // Close the database connection
    $conn->close();

    ?>


</body>
</html>