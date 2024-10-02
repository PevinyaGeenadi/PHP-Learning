<?php

function emtyInputsSignup($name,$email,$username,$pwd,$pwdRepeat){
    $result;
    if (empty($name) ||  empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
       $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function invalidUid($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
       $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
       $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function pwdMatch($pwd,$pwdRepeat){
    $result;
    if ($pwd !==$pwdRepeat) {
       $result = true;
    }else{
        $result = false;
    }

    return $result;
}


function uidExists($conn,$username,$email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss",$username,$email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }else{
        return false;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn,$name,$email,$username,$pwd){
        
        $sql = "INSERT INTO users(usersName,usersEmail,usersUid,usersPwd) VALUE (?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../signup.php?error=stmtfailed");
            exit();
        }

        $hashPwd = password_hash($pwd,PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$username,$hashPwd);
        mysqli_stmt_execute($stmt);  //line 82
        mysqli_stmt_close($stmt);
        header("Location: ../signup.php?error=none");
        exit();

    }

    function emptyInputLogin($username,$pwd){
        $result;
        if (empty($username) || empty($pwd)) {
           $result = true;
        }else{
            $result = false;
        }
    
        return $result;
    }

    function LoginUsers($conn,$username,$pwd){
        $uidExists =uidExists($conn,$username,$username);

        if ($uidExists === false) {
            header("Location: ../signp.php?error=wrongLogin");
            exit();
        }

        $pwdHashed = $uidExists["usersPwd"];
        $chekPwd = password_verify($pwd,$pwdHashed);

        if ($chekPwd === false) {
            header("Location: http://localhost/myphp/signup.php?error=wrongLogin");
            exit();
        }elseif ($chekPwd === true) {
           session_start();
           $_SESSION ['userid'] = $uidExists["usersId"];
           $_SESSION ['userUid'] = $uidExists["usersUid"];
           $_SESSION ['username'] = $uidExists["usersName"];
           header("Location: ../index.php");
           exit();
        }
    }