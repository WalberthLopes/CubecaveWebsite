<?php

if (isset($_POST["submit"])) {

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $email = $_POST["email"];
    $username = $_POST["username"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    if (emptyInputSuport($email, $username, $subject, $message) !== false) {
        header("location: /suport.php?error=emptyinput");
        exit();
    }
    if (!session_start()) {
        header("location: /suport.php?error=notlogedin");
        exit();
    }

}
else {
    header("location: /suport.php");
    exit();
}