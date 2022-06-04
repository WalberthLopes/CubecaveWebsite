<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
    <link rel="stylesheet" href="/assets/css/login.css">
    <link rel="icon" type="image/x-icon" href="/assets/images/icon.png" />
    <title>CubeCave - Join</title>
</head>
<body>
    <div class="container">
        <form action="/login.php" class="loginForm" method="POST">
            <h1>Login</h1>
            <input type="text" class="formInput" autofocus placeholder="Username">
            <input type="password" class="formInput" autofocus placeholder="Senha">
            <button class="loginButton formInput" type="submit">Entrar</button>
            <p class="forgotPassword">Esqueceu sua senha?</p>
        </form>
        <form action="/singup.php" class="createAccountForm" method="POST">
            <h1>Criar conta</h1>
            <p id="labelError">Sua aventura vai começar!</p>
            <input type="text" id="createUsername" class="formInput" autofocus placeholder="Username" name="createUsername">
            <input type="password" id="createPassword" class="formInput" autofocus placeholder="Senha" name="createPassword">
            <input type="password" id="passwordConfirm" class="formInput" autofocus placeholder="Confirmar senha">
            <button class="createAccountButton formInput" onclick="cadastrar()" type="submit" name="submit">Criar conta</button>
        </form>
    </div>
    <script src="/assets/javascript/login.js"></script>
</body>
</html>