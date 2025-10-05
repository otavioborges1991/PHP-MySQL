<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<main class="padding">
    <form action="includes/login.php" method="post" class="flex-row">
        <i class="material-symbols-outlined">account_circle</i>
        <input type="text" name="usuario" id="usuario" placeholder="nome de usuário" required>
        <i class="material-symbols-outlined">key</i>
        <input type="password" name="senha" id="senha" required placeholder="senha">
        <input class="margin-horizontal" type="submit" value="Entrar">
    </form> 
</main>
</body>
</html>

