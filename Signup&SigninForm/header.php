<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pevinya Geenadi</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #4B0082;
        }

        .active {
            background-color: #800080;
        }

        .container {
            margin: 10px auto;
            max-width: 1000px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* CSS for the login form */
        input[type=text], input[type=password], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button, input[type=submit] {
            width: 100%;
            background-color: #6A0DAD;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover, input[type=submit]:hover {
            background-color: #4B0082;
        }

        .form {
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 2px;
            background-color: #333;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<ul>
  <li><a class="active" href="index.php">Home</a></li>

  <?php
    if (isset($_SESSION["username"])) {
        echo '<li><a href="about.php">About</a></li>';
        echo '<li><a href="contact.php">Contact</a></li>';
        echo '<li style="float:right"><a href="include/logout.inc.php"> Logout </a></li>';
        echo '<li style="float:right"><a href="profile.php">'.$_SESSION["username"].'! </a></li>';
    } else {
        echo '<li style="float:right"><a href="login.php"> Login </a></li>';
    }
  ?>
</ul>


<footer>
    <p>&copy; 2024 Pevinyaa Geenadi. All rights reserved.</p>
</footer>

</body>
</html>
