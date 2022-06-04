<?php

if (isset($_POST["submit"])) {
    
    $username = $_POST["createUsername"];
    $password = $_POST["createPassword"];

    require_once 'db.php';
    require_once 'functions.php';

    

}
else {
    header("location: /form.php");
}