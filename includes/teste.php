<link rel="stylesheet" href="../style/style.css">
<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$nomeDoBanco = "bd_games";

$banco = new mysqli($host, $usuario, $senha, $nomeDoBanco);
if ($banco->connect_errno) {
    echo "Falha ao conectar ao banco de dados: (" . $banco->connect_errno . ") " . $banco->connect_error;
    die();
}
// Configura a conexão para usar UTF-8
// Isso ajuda a evitar problemas com acentuação
// e caracteres especiais
$banco->query("SET NAMES 'utf8'");
$banco->query("SET character_set_connection=utf8");
$banco->query("SET character_set_client=utf8");
$banco->query("SET character_set_results=utf8");
// Ja estava funcionando sem isso.

// Testando uma busca
$query = $banco->query("select * from generos");
if (!$query) {
    echo "Erro na consulta: " . $banco->errno;
    die();
} else {
    for ($i = 0; $i < $query->num_rows; $i++) {
        $registro = $query->fetch_object();
        echo "<div class='border'><pre>";
        print_r($registro);
        echo "</pre></div>";
    }
}

