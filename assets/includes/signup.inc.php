<?php

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $name = $_POST["name"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdconfirm = $_POST["pwdconfirm"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdconfirm) !== false) {
        header("location: /signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: /signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: /signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdconfirm) !== false) {
        header("location: /signup.php?error=pwdunmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: /signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else {
    header("location: /signup.php");
    exit();
}