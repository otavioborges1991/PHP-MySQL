<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php 
    require_once "includes/banco.php";
    require_once "includes/funcoes.php";
    ?>
    <header>
        <h1>Jogos</h1>
    </header>
    <main>
        <h1>Escolha seu jogo</h1>
        <table>
            <thead>
                <th>Foto</th>
                <th>Nome</th>
                <th>Adm</th>
            </thead>
            <?php
            $busca = $banco->query("SELECT * FROM jogos ORDER BY nome");
            if (!$busca) {
                echo "Falha na consulta";
            } else {
                if ($busca->num_rows == 0) {
                    echo "<td><td>Nenhum Jogo cadastrado, ou erro na busca.</td></tr>";
                } else {
                    while ($reg=$busca->fetch_object()) {
                        $thumbnail = thumb($reg->capa);
                        echo "<tr>";
                        echo "<td><img src='{$thumbnail}' alt='{$reg->nome}'></td>";
                        echo "<td><h2>$reg->nome</h2><div class='scroll'><p>$reg->descricao</p></div></td>";
                        echo "<td>ADM</td>";
                    }
                }
            }
            ?>
        </table>
    </main>
    <footer>
        <p>Desenvolvido por <strong>Otavio Vinicios Borges</strong> para o curso de PHP com MySQL do Estudonauta</p>
    </footer>
    <?php $banco->close(); ?>
</body>
</html>