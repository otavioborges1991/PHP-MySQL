<?php

function thumb($arquivo): string {
    // cria uma thubmanil 
    $caminho = "fotos/$arquivo";
    if (is_null($arquivo) || !file_exists($caminho)) {
        return "fotos/indisponivel.png";
    } else {
        return $caminho;
    }
}
function usuario():bool {
    if (!empty($_SESSION['user']) && !empty($_SESSION['tipo']) && !empty($_SESSION['nome'])) {
        return true;
    } else {
        return false;
    }
}

function show_ip():string|null {
    $ip = $_SERVER['REMOTE_ADDR'] ?? null;
    return $ip;
}

function msg_sucesso($mensagem='Sucesso!') {
    return "<div class='sucesso'><span class='material-symbols-outlined'>check</span>$mensagem</div>";
}

function msg_aviso($mensagem='Aviso!') {
    return "<div class='aviso'><span class='material-symbols-outlined'>warning</span>$mensagem</div>";
}

function msg_erro($mensagem='Erro!'){
    return "<div class='erro'><span class='material-symbols-outlined'>error</span>$mensagem</div>";
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