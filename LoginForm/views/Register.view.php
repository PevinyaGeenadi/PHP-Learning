<?php
require 'header.php';
?>

<div class="form">
    <h2>Signup Form</h2>
    <form action="../controllers/registerForm.php" border ="2" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.view.php">Login here</a></p>
</div>

<?php
require 'footer.php';
?>