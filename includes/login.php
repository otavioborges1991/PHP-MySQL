<?php
// Sistema de login
session_start();
if ( !isset($_SESSION['user']) ) 
{
    $_SESSION["user"] = "";
    $_SESSION["nome"] = "";
    $_SESSION["tipo"] = "";
}

function cripto($senha) : string {
    // encripta uma senha com md5 para ser usado na função gerahash
    return md5($senha);
}

function gerarHash($senha) : string {
    // gera um hash de uma senha apos encriptala
    $cripto = cripto($senha);
    $hash = password_hash($cripto, PASSWORD_DEFAULT);
    return $hash;
}

function testarHash($senha, $hash): bool {
    // retorna 1 true se a password encriptado com cripto() confere com a hash.
    // senão, retorna 0
    $cripto = cripto($senha);
    $ok = password_verify($cripto, $hash);
    return $ok;
}