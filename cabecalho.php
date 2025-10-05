<link rel="stylesheet" href="style/style.css">
<?php
require_once "includes/funcoes.php";

?>
<header>
    <nav>
        <h1>Jogos</h1>
        <div class="margin flex-row flex-center-center">
            <?php if (empty($_SESSION['user'])) {
                echo '<button><a href="user-login.php">Entrar</a></button>';
            } else {
                echo "Olá, " . $_SESSION['nome'];
            }
                
            ?>
        </div>
    </nav>
</header>