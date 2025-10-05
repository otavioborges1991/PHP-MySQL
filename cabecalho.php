<link rel="stylesheet" href="style/style.css">
<?php
require_once "includes/funcoes.php";

?>
<header>
    <nav>
        <h1>Jogos</h1>
        <div class="margin flex-column flex-center-center">
            <?php if (empty($_SESSION['user'])) {
                echo '<button><a href="user-login.php">Entrar</a></button>';
            } else {
                echo "Olá, <strong>" . $_SESSION['nome'] . "</strong><br>";
                echo "Sair";
            }
                
            ?>
        </div>
    </nav>
</header>