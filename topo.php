<link rel="stylesheet" href="style/style.css">
<?php
require_once "includes/funcoes.php"
?>
<header>
    <h1>Jogos</h1>
    <nav class="margin">
        <?php echo usuario(show_ip:true);?>
        <input type="button" value="<?php if ($usuario != null) {echo 'Sair';} else { echo 'Entrar';}?>">
    </nav>
</header>