<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <main>
        <header>
            Logout
        </header>
        <?php
        require_once "includes/login.php";
        require_once "includes/funcoes.php";
        logout();
        msg_sucesso("Desconectado");
        voltar();
        ?>
    </main>
</body>
</html>