<?php
    include_once 'header.php';
?>
        <div class="bodyContainer">
            <div class="suportFormContainer">
                <h1 class="suportFormTitle">Entre em contato</h1>
                <form action="assets/includes/suport.inc.php" class="suportForm">
                    <input type="text" name="email" placeholder="Email" class="suportFormInput">
                    <br>
                    <input type="text" name="username" placeholder="Nick" class="suportFormInput">
                    <br>
                    <input type="text" name="subject" placeholder="Assunto" class="suportFormInput">
                    <br>
                    <textarea name="message" cols="30" rows="10" class="suportFormText">Descreva seu problema...</textarea>
                    <button type="submit" name="submit" class="suportFormButton">ENVIAR</button>
                    <p>Nosso suporte retornará o contato em seu e-mail em até 24 horas.</p>
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