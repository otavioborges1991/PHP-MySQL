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
    require_once "topo.php";

    $ordem = $_GET['ordem'] ?? null;
    $sentido = $_GET['sentido'] ?? 'ASC';
    $busca = $_GET['busca'] ?? null;

    $lista_values = array('nome', 'produtora', 'genero', 'nota');
    $lista_textos = array('Nome', 'Produtora', 'Gênero', 'Nota')

    ?>
    <main>
        <header>
            <h1>Escolha seu jogo</h1>
        </header>
        <nav>
            <form class="margin" action="index.php" method="get" id="busca">
                <label for="ordem">Ordenar:</label>
                <select name="ordem" id="ordem">
                    <?php
                    for ($index = 0; $index < count($lista_values); $index++) {
                        if ($ordem == $lista_values[$index]) {
                            $selected = 'selected';
                        } else {
                            $selected = null;
                        }
                        echo "<option $selected value='$lista_values[$index]'>$lista_textos[$index]</option>";
                       
                    }
                    ?>

                </select>
                <label for="ascendente">
                    0-9 A-Z
                    <input <?php if ($sentido == 'ASC') {echo 'checked';}?> type="radio" name="sentido" id="ascendente" value="ASC">
                </label>
                <label for="decrescente">
                    Z-A 9-0
                    <input <?php if ($sentido == 'DESC') {echo 'checked';}?> type="radio" name="sentido" id="decrescente" value="DESC">
                </label>
                <input type="text" name="busca" id="busca" size="10" maxlength="40" value="<?php echo $busca?>">
                <input type="submit" value="Buscar">
            </form>
        </nav>
        <table>
            <thead>
                <th>Foto</th>
                <th>Nome</th>
                <th>Adm</th>
            </thead>
            <?php
            $termos = "SELECT j.codigo, j.nome, g.nome genero, j.capa, p.nome produtora FROM jogos j 
            JOIN generos g on j.genero_codigo = g.codigo
            JOIN produtoras p on j.produtor_codigo = p.codigo ";

            if ($busca) {
                $termos .= "WHERE j.nome like '%$busca%' ";
            }

            switch ($ordem) {
                case 'nome':
                    $termos .= "ORDER BY j.nome ";
                    break;
                case 'produtora':
                    $termos .= "ORDER BY produtora ";
                    break;
                case 'genero':
                    $termos .= "ORDER BY genero ";
                    break;
                case 'nota':
                    $termos .= "ORDER BY j.nota ";
                    break;
                default:
                    $termos .= "ORDER BY j.nome ";
            }

            switch ($sentido) {
                case 'ASC':
                    $termos .= 'ASC ';
                    break;
                case 'DESC':
                    $termos .= 'DESC ';
                    break;
                default:
                    $termos .= 'ASC ';
            }

            $query = $banco->query($termos);
            if (!$query) {
                echo "Falha na consulta";
            } else {
                if ($query->num_rows == 0) {
                    echo "<td><td>Nenhum Jogo cadastrado, ou erro na busca.</td></tr>";
                } else {
                    while ($reg=$query->fetch_object()) {
                        $thumbnail = thumb($reg->capa);
                        $genero =  $reg->genero ?? "Não classificado";
                        $produtora = $reg->produtora ?? 'Desconhecido';
                        echo '<tr>';
                        echo "<td><img src='{$thumbnail}' alt='{$reg->nome}'></td>";
                        echo "<td><h2><a href='detalhes.php?codigo={$reg->codigo}' target='_self' referrerpolicy='same-origin'>$reg->nome</h2></a>
                        <p>[$genero]</p><p>$produtora</p></td>";
                        echo "<td>ADM</td></tr>";
                    }
                }
            }
            ?>
        </table>
    </main>
    <?php 
    include_once "rodape.php";
    ?>
</body>
</html>