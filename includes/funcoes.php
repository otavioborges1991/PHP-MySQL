<?php

function thumb($arquivo) {
    // cria uma thubmanil 
    $caminho = "fotos/$arquivo";
    if (is_null($arquivo) || !file_exists($caminho)) {
        return "fotos/indisponivel.png";
    } else {
        return $caminho;
    }
}
function usuario($show_ip=false) {
    // mostra informações sobreo usuario logado se houver um
    $usuario = $_SESSION['USER'] ?? null; // provavelmente a parte que tem que ser trabalhada
    $msg = "Usuário: $usuario";
    if ($show_ip) {
        $usuario_ip = $_SERVER['REMOTE_ADDR'] ?? null;
        $msg .= " | IP: $usuario_ip";
    }
    return $msg;
        
}
