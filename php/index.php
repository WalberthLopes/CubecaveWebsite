<?php
    include_once 'header.php';
?>
        <div class="bodyContainer">
            <div class="bodyCardsContainer">
                <!-- MAIN CARDS -->
                <div class="bodyMainCardContainer">
                    <?php
                        include_once 'mainCards.php';
                    ?>
                </div>
                <!-- SIDE CARDS -->
                <div class="bodySideCardContainer">
                    <?php
                        include_once 'sideCards.php';
                    ?>
                </div>
            </div>
        </div>
        <?php
            include_once 'footer.php';
        ?>
    </div>
    <script src="/assets/javascript/main.js"></script>
</body>
</html>