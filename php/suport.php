<?php
    include_once 'header.php';
?>
        <div class="bodyContainer">
            <div class="suportFormContainer">
                <div class="errorContainer">
                    
                <?php
                    if (!isset($_SESSION["useruid"])) {
                        header("location: /login.php?error=notloggedin");
                        exit ();
                    }
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p>Preencha todos os campos.</p>";
                        }
                        else if ($_GET["error"] == "mailsend") {
                            echo "<p>Sua mensagem foi enviada!</p>";
                        }
                    }
                ?>
            
                </div>
                <h1 class="suportFormTitle">Entre em contato</h1>
                <p>Nosso suporte retornará o contato em seu e-mail em até 24 horas.</p>
                <form action="assets/includes/suport.inc.php" class="suportForm" method="post">
                    <input type="text" name="email" placeholder="Email" class="suportFormInput">
                    <br>
                    <input type="text" name="username" placeholder="Nick" class="suportFormInput">
                    <br>
                    <input type="text" name="discord" placeholder="Discord" class="suportFormInput">
                    <br>
                    <input type="text" name="subject" placeholder="Assunto" class="suportFormInput">
                    <br>
                    <textarea name="message" cols="30" rows="10" class="suportFormText" utf8_decode()>Descreva seu problema...</textarea>
                    <button type="submit" name="submit" class="suportFormButton">ENVIAR</button>
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