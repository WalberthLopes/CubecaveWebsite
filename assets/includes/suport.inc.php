<?php

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $username = $_POST["username"];
    $discord = $_POST["discord"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mailTo = "contato@cubecave.net";
    $headers = $email. "\r\n". $email;
    $txt = "Mensagem de: ". $username . " | ". $discord . ".\n\n". $message; 

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSuport($email, $username, $discord, $subject, $message) !== false) {
        header("location: /suport.php?error=emptyinput");
        exit();
    }

    mail($mailTo, $subject, $txt, $headers);
    header("location: /suport.php?error=mailsend");

}
else {
    header("location: /suport.php");
    exit();
}