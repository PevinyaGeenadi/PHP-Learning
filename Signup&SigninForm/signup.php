<?php
    include_once 'header.php';
?>
    <div class="form">
        <h1>Register your account</h1>
    <form action="include/signup.inc.php" method="post">
    <input type="text" id="fname" name="name" placeholder="Name">
    <input type="text" id="fname" name="email" placeholder="Emial">
    <input type="text" id="fname" name="uid" placeholder="User name">
    <input type="password" id="fname" name="pwd" placeholder="Password">
    <input type="text" id="fname" name="pwdrepeat" placeholder="Retype Password">
    <button name="submit" type="submit">Register</button>
    </form>
    
    <?php 
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyInput") {
           echo '<div class="error">Fill in the all fields</div>';
        }elseif ($_GET["error"] == "invalidUid") {
            echo '<div class="error">Invalid UserName !</div>';
        }elseif ($_GET["error"] == "invalidEmail") {
            echo '<div class="error">Invalid Email !</div>';
        }elseif ($_GET["error"] == "PasswordNotMatch") {
            echo '<div class="error">Password not match !</div>';
        }elseif ($_GET["error"] == "UidArlredyTaken") {
            echo '<div class="error">User name Alredy taken !</div>';
        }elseif ($_GET["error"] == "stmtfailed") {
            echo '<div class="error">Something went wrong</div>';
    }elseif ($_GET["error"] == "none") {
        echo '<div class="error">Account created</div>';
}
}
    ?>
    <p>Alredy have an account ?<a href="login.php">Login here</a></p>
    </div>
<?php
    include_once 'footer.php';
?>  