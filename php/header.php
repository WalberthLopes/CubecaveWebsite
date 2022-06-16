<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css?v=<?php echo time(); ?>">
    <link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="/assets/images/icon.png" />
    <title>Cubecave - Minecraft Server</title>
</head>
<body>
    <div class="loginContainer">
        <div class="loginButtons">
            <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<button class='loginButton'><a href='/profile.php'>PERFIL</a></button>";
                    echo "<button class='loginButton'><a href='assets/includes/logout.inc.php'>LOGOUT</a></button>";
                }
                else {
                    echo "<button class='loginButton'><a href='/signup.php'>SIGNUP</a></button>";
                    echo "<button class='loginButton'><a href='/login.php'>LOGIN</a></button>";
                }
            ?>
        </div>
    </div>
    <div class="container">
        <div class="headerContainer">
            <img class="headerIpImg" src="/assets/images/cubecave.png">
            <button class="headerIpButton" onclick="copyIp()">JOGAR</button>
            <p class="headerIpText" onclick="copyIp()">SERVER IP: MC.CUBECAVE.NET</p>
            <button class="headerMenuButton" onclick="window.location.href='/index.php'">Home</button>
            <button class="headerMenuButton" onclick="window.location.href='/index.php'">Wiki</button>
            <button class="headerMenuButton" onclick="window.location.href='/index.php'">Regras</button>
            <button class="headerMenuButton" onclick="window.location.href='/suport.php'">Suporte</button>
            <button class="headerMenuButton" onclick="window.location.href='https://cubecave.lojasquare.net'">Loja</button>
        </div>