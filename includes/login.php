<?php
// Sistema de login
session_start();
if ( !isset($_SESSION['user']) ) 
{
    $_SESSION["user"] = "";
    $_SESSION["nome"] = "";
    $_SESSION["tipo"] = "";
}

function cripto($senha):string {
    return md5($senha);
}

function gerarHash($senha):string {
    // gera um hash de uma senha apos encriptala
    $senha_encriptada = cripto($senha);
    $hash = password_hash($senha_encriptada, PASSWORD_DEFAULT);
    return $hash;
}

function testarHash($senha, $hash):bool {
    // retorna 1 true se a password encriptado com cripto() confere com a hash.
    $senha_encriptada = cripto($senha);
    $ok = password_verify($senha_encriptada, $hash);
    return $ok;
}

function logout():void {
    // Desconecta o usuário atual
    session_unset();
}

function verificarSessao():bool {
    // verifica se o usuário esta logado ou não
    if (empty($_SESSION["user"])) {
        return false;
    } else {
        return true;
    }
}
