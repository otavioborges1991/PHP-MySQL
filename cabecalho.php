<link rel="stylesheet" href="style/style.css">
<?php
require_once "includes/funcoes.php";
?>
<header>
    <nav>
        <h1>Jogos</h1>
        <div class="margin flex-column flex-center-center">
            <?php if (empty($_SESSION['user'])) {
                echo '<a class="botao" href="user-login.php">Entrar</a>';
            } else {
                echo "Olá, <strong>" . $_SESSION['nome'] . "</strong><br>";
                echo '<a class="botao" href="user-logout.php">Sair</a>';
            } 
            ?>
        </div>
    </nav>
</header>