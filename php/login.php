<?php
    include_once 'header.php';
?>
        <div class="bodyContainer">
            <div class="loginBoxContainer">
                <div class="errorContainer">
                    
                <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p>Preencha todos os campos.</p>";
                        }
                        else if ($_GET["error"] == "wronglogin") {
                            echo "<p>As informações estão incorretas.</p>";
                        }
                        else if ($_GET["error"] == "notloggedin") {
                            echo "<p>Permaneça logado para utilizar o suporte.</p>";
                        }
                    }
                ?>
                
                </div>
                <h1 class="loginBoxTitle">
                    Login
                </h1>
                <form action="assets/includes/login.inc.php" method="post">
                    <input type="text" name="uid" class="loginBoxInput" placeholder="Email">
                    <br>
                    <input type="password" name="pwd" class="loginBoxInput" placeholder="Senha">
                    <button class="loginBoxButton" type="submit" name="submit">Entrar</button>
                    <p><a href="/login.php">Criar conta</a></p>
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