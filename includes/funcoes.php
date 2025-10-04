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
function usuario():string|null {
    $usuario = $_SESSION['USER'] ?? null;
    return $usuario;
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