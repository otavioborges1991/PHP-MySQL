<link rel="stylesheet" href="style/style.css">
<?php
require_once "includes/funcoes.php";
require_once 'includes/login.php';
?>
<header>
    <nav>
        <div class="margin flex-column flex-center-center">
            <?php if (empty($_SESSION['email'])) {
                require_once 'user-login-form.php';
            } else {
                require_once 'user-info.php';
            }
            ?>
        </div>
    </nav>
</header>