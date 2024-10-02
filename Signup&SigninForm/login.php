<?php
    include_once 'header.php';
?>
    <div class="form">
        <h1>Login in to your account</h1>
    <form action="include/login.inc.php" method="post">
    <input type="text" name="uid" placeholder="Email / Username" required>
    <input type="password" name="pwd" placeholder="Password" required>
    <button name="submit" type="submit">Login</button>
    </form>

    <?php 
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyInput") {
           echo '<div class="error">Fill in the all fields</div>';
        }elseif ($_GET["error"] == "wrongLogin") {
            echo '<div class="error">Invalid Details !</div>';
        }elseif ($_GET["error"] == "stmtfailed") {
            echo '<div class="error">Something went wrong</div>';
    }elseif ($_GET["error"] == "none") {
        echo '<div class="error">Account created</div>';
}
}
    ?>

    <p>Don't have an account?<a href="signup.php">Create New Account</a></p>
    </div>
<?php
    include_once 'footer.php';
?>  