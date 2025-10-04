<link rel="stylesheet" href="style/style.css">
<?php
require_once "includes/funcoes.php";
?>
<header>
    <nav class="margin flex-column flex-center-center">
        <h1>Jogos</h1>
        <div class="flex-row margin flex-center-center">
            <?php echo "Usuario: <strong>". usuario() . "</strong> Endereço de ip:<strong>". show_ip() . "</strong>";?>
            <span class="material-symbols-outlined">account_circle_off</span>
            <input type="button" value="<?php if (usuario() != null) {echo 'Sair';} else { echo 'Entrar';}?>">
        </div>
    </nav>
</header>