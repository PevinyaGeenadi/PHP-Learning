<?php

if (isset($_POST["submit"])) {
   $name = $_POST["name"];
   $email = $_POST["email"];
   $username = $_POST["uid"];
   $pwd = $_POST["pwd"];
   $pwdRepeat= $_POST["pwdrepeat"];

   require_once 'dbh.inc.php';
   require_once 'fucntion.inc.php';

   $emptyInputs = emtyInputsSignup($name,$email,$username,$pwd,$pwdRepeat);
   $invalidUid = invalidUid($username);
   $invalidEmail = invalidEmail($email);
   $pwdMatch = pwdMatch($pwd,$pwdRepeat);
   $uidExists = uidExists($conn,$username,$email);

   if ($emptyInputs!==false) {
    header('Location:../signup.php?error=emptyInput');
    exit();
   }
   if ($invalidUid!==false) {
    header('Location:../signup.php?error=inva;invalidUid');
    exit();
   }
   if ($invalidEmail!==false) {
    header('Location:../signup.php?error=invalidEmail');
    exit();
   }
   if ($pwdMatch!==false) {
    header('Location:../signup.php?error=PasswordNotMatch');
    exit();
   }
   if ($uidExists!==false) {
    header('Location:../signup.php?error=UidArlredyTaken');
    exit();
   }

   createUser($conn,$name,$email,$username,$pwd);

}else {
    header('Location:../login.php');
}