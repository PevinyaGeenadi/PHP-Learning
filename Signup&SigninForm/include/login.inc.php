<?php

if (isset($_POST["submit"])) {
   $username = $_POST['uid']?? '';
   $pwd = $_POST['pwd']?? '';

   require_once 'dbh.inc.php';
   require_once 'fucntion.inc.php';

   if (emptyInputLogin($username,$pwd)!==false) {
    exit();
   }

   LoginUsers($conn,$username,$pwd);

}else {
    header('Location:../login.php');
}