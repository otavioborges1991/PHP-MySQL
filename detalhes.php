<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php
    require_once "includes/banco.php";
    require_once "includes/funcoes.php";
    ?>
    <header>
        <h1>Detalhes do Jogo</h1>
    </header>
    <main>
        <header>
            <h1>Detalhes do Jogo</h1>
        </header>
        <?php
        $codigo = $_GET['codigo'] ?? null;
        $busca = $banco->query("SELECT * FROM jogos WHERE codigo='$codigo'");
        if (!$codigo || !is_numeric($codigo) || !$busca || $busca->num_rows != 1) {
            echo "<p class='aviso'>Jogo inválido</p>";
            echo '<button class="margin" onclick="window.history.back()">Voltar</button>';
            exit;
        } else {
            $registro = $busca->fetch_object();
            $q = $banco->query("SELECT nome FROM generos WHERE codigo = '{$registro->genero_codigo}'");
            $genero = $q->fetch_object();
            $q = $banco->query("SELECT nome FROM produtoras WHERE codigo = '{$registro->produtor_codigo}'");
            $produtora = $q->fetch_object();
        }
        ?>
        <div class="margin grid-container">
            <img class="border foto" src='<?php echo thumb($registro->capa)?>' alt="Foto do Jogo">
            <div class="border texto">
                <div class="border titulo">
                    <header>
                        <?php echo "<h3>$registro->nome</h3>"; ?>
                    </header>
                </div>
                <div class="border descricao">
                    <?php
                        echo "<h4>Genero: $genero->nome</h4>";
                        echo "<h4>Produtora: $produtora->nome</h4>";
                        echo "<h4>Nota: ". number_format($registro->nota, 1) . " / 10</h4>";
                        echo "<p>$registro->descricao</p>";
                    ?>
                </div>
                <div class="border adm">
                    <p>ADM</p>
                </div>
            </div>
        </div>
        <button onclick="window.history.back()" class="margin">Voltar</button>
    </main>
    <footer>
        <p>Desenvolvido por <strong>Otavio Vinicios Borges</strong> para o curso de PHP com MySQL do Estudonauta</p>
    </footer>
</body>
</html>