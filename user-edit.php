<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informação de Usuário</title>
</head>
<body>
    <?php
        require_once 'includes/funcoes.php';
        require_once 'cabecalho.php';
    ?>
    <main>
        <?php
            if (!isset($_SESSION['nome'])) {
                echo msg_erro('Acesso negado! você não esta <a href="user-login.php">logado!</a>');
            } else {
                include 'user-edit-form.php';
            }
            echo voltar();
        ?>
    </main>
    <?php
        require_once 'rodape.php';
    ?>
</body>
</html>