<link rel="stylesheet" href="style/style.css">
<?php
    $usuario_ip = $_SERVER['REMOTE_ADDR'] ?? null;
    $usuario = $_SESSION['USER'] ?? $usuario_ip;
    $data = date('d/m/y')
?>
<header>
    <div class="inline-block">
        <h1>Jogos</h1>
    </div>
    <div class="inline-block">
        <input type="button" value="<?php if ($usuario != null) {echo 'Sair';} else { echo 'Entrar';}?>">
    </div>
</header>