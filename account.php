<?php
    include './src/layout/layout.php';
    if(!isset($_SESSION['user'])) {
        header('location: auth-signin');
    }
    // <!-- //main contents -->
    ?>
        <p class="p-32">Account</p>
    <?php

    // footer
    include './src/components/footer.php'
?>
</body>
</html>