<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
</head>
<body>
    <main>
        <?php
        $usuario = $_POST["usuario"] ?? null;
        $senha = $_POST["senha"] ?? null;

        if (is_null($usuario) || is_null($senha)) {
            require "user-login-form.php";
        } else {
            echo "Dados foram passados";
            //header("Location: index.php");
        }
        ?>
    
</main>
</body>
</html>

