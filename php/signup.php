<?php
    include_once 'header.php';
?>
        <div class="bodyContainer">
            <div class="signupBoxContainer">
                <div class="errorContainer">
                    
                <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p>Preencha todos os campos.</p>";
                        }
                        else if ($_GET["error" == "invaliduid"]) {
                            echo "<p>Escolha um nome válido.</p>";
                        }
                        else if ($_GET["error" == "invalidemail"]) {
                            echo "<p>Escolha um email válido.</p>";
                        }
                        else if ($_GET["error" == "pwdunmatch"]) {
                            echo "<p>As senhas não estão iguais.</p>";
                        }
                        else if ($_GET["error" == "stmtfailed"]) {
                            echo "<p>Algo deu errado. Tente novamente!</p>";
                        }
                        else if ($_GET["error" == "usernametaken"]) {
                            echo "<p>Este nome já foi escolhido.</p>";
                        }
                        else if ($_GET["error" == "none"]) {
                            echo "<p>Você criou a sua conta com sucesso!</p>";
                        }
                    }
                ?>
            
                </div>
                <h1 class="signupBoxTitle">
                    SignUp
                </h1>
                <form action="assets/includes/signup.inc.php" method="post">
                    <input type="text" name="email" class="signupBoxInput" placeholder="Email">
                    <br>
                    <input type="text" name="name" class="signupBoxInput" placeholder="Nome">
                    <br>
                    <input type="text" name="uid" class="signupBoxInput" placeholder="Nick">
                    <br>
                    <input type="password" name="pwd" class="signupBoxInput" placeholder="Senha">
                    <br>
                    <input type="password" name="pwdconfirm" class="signupBoxInput" placeholder="Confirmar senha">
                    <button class="signupBoxButton" type="submit" name="submit">Criar</button>
                </form>
            </div>
        </div>
        <?php
            include_once 'footer.php';
        ?>
    </div>
    <script src="/assets/javascript/main.js"></script>
</body>
</html>