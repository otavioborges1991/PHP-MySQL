<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Cadastro</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/d0517b7da9.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h1>
            Cadastro de usuário
        </h1>
    </header>
    <main>
        <?php
        require_once 'includes/funcoes.php';
        require_once 'includes/login.php';
        require_once 'includes/banco.php';

        if ($_SESSION["tipo"] != "admin") {
            echo msg_erro('Acesso negado!');
            echo 'Você não tem acesso de adminstrador!';
            die();
        } else {
            if (!isset($_POST['nome'])) {
                require_once 'user-cadastro-form.php';
            } else {
                $nome = $_POST['nome'] ?? null;
                $email = $_POST['email'] ?? null;
                $tipo = $_POST['tipo'] ?? null;
                $senha1 = $_POST['senha1'] ?? null;
                $senha2 = $_POST['senha2'] ?? null;

                if ($senha1 === $senha2) {
                    if (empty($nome) || empty($email) || empty($tipo) || empty($senha1) || empty($senha2)) {
                        echo "Todos os dados são obrigatorios";
                    } else {
                        $senha = gerarHash($senha1);
                        // checando se o usuário ja existe.
                        $check = $banco->query("SELECT codigo FROM usuarios WHERE email = '$email'");
                        if ($check && $check->num_rows > 0) {
                            echo msg_erro("Já existe um usuário cadastrado com este e-mail!");
                        } else {
                            // inserindo um novo usuário.
                            $termos = 
                                "INSERT INTO usuarios 
                                (email, senha, nome_completo, tipo)
                                VALUES
                                ('$email', '$senha', '$nome', '$tipo')";
                            if ($banco->query($termos)) {
                                echo msg_sucesso('Usuário Cadastrado!');
                            } else {
                                echo msg_erro("Não foi possivel cadastar o email $email");
                            }
                        }
                    }
                } else {
                    echo msg_erro('As senhas não coincidem');
                }
            }
        }
        ?>


    </main>
    
    <?php
    require_once 'rodape.php';
    ?>    
</body>
</html>
