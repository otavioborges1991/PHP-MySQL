<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$nomeDoBanco = "bd_games";

$banco = new mysqli($host, $usuario, $senha, $nomeDoBanco);
if ($banco->connect_errno) {
    echo "Falha ao conectar ao banco de dados: (" . $banco->connect_errno . ")";
    die();
}
