<?php 
$usuario_ip = $_SERVER['REMOTE_ADDR'] ?? null;
$usuario_nome = $_SESSION['USER'] ?? $usuario_ip;
$data = date('d/m/y')
?>
<link rel="stylesheet" href="style/style.css">
<footer>
    <button onclick="window.history.back()" class="margin">Voltar</button>
    <p class="margin"><?php echo "Usuário: <strong>{$usuario}</strong> | Data: <strong>{$data}</strong>"?></p>
    <p>Desenvolvido por <strong>Otavio Vinicios Borges</strong> &copy; 2025</p>
</footer>
<?php $banco->close(); ?>