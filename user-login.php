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
    <?php 
    require "includes/banco.php";
    require "includes/login.php";
    require "includes/funcoes.php";
    ?>
    <main>
        <?php
        $email = $_POST["email"] ?? null;
        $senha = $_POST["senha"] ?? null;

        if (is_null($email) || is_null($senha)) {
            require "user-login-form.php";
        } else {
            $termos = "SELECT email, senha, nome_completo, tipo
            FROM usuarios WHERE email = '$email' LIMIT 1";
            $query = $banco->query($termos);
            if (!$query) {
                echo msg_erro("Falha ao acessar o banco de dados");
            } else {
                if ($query->num_rows > 0) {
                    $registro = $query->fetch_object();
                    if (testarHash($senha, $registro->senha)) {
                        echo msg_sucesso("Sucesso");
                        $_SESSION["user"] = $registro->email;
                        $_SESSION["nome"] = $registro->nome_completo;
                        $_SESSION["tipo"] = $registro->tipo;
                        header("Location: index.php");
                    } else {
                        echo msg_erro("Senha Invalida!");
                    }
                } else {
                    echo msg_erro("email não encontrado!");
                }
            }
        }
        voltar();
        ?>
</main>
</body>
</html>

