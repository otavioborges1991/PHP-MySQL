<?php 
require_once "includes/funcoes.php"
?>
<link rel="stylesheet" href="style/style.css">
<footer>
    <button onclick="window.history.back()" class="margin float-left">Voltar</button>
    <p class="margin"><?php echo usuario(show_ip:true);?></p>
    <p class="float-bottom">Desenvolvido por <strong>Otavio Vinicios Borges</strong> &copy; 2025</p>
</footer>
<?php $banco->close(); ?>