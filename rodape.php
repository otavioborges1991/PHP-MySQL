<link rel="stylesheet" href="style/style.css">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
<?php 
require_once "includes/funcoes.php";
require_once "includes/banco.php";
?>
<footer>
    <p class="margin"><?php echo usuario() . show_ip();?></p>
    <p class="float-bottom">Desenvolvido por <strong>Otavio Vinicios Borges</strong> &copy; 2025</p>
</footer>
<?php $banco->close(); ?>