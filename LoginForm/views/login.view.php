<?php
require 'partials/header.php';
?>

    <h2>Login</h2>
    <form action="../controllers/loginForm.php" method="POST">
        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="Register.view.php">Signup here</a></p>

<?php
require 'partials/footer.php';
?>