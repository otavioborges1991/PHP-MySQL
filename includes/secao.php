<?php
session_start();
// Sistema de login


if (!isset($_SESSION['user'])){
    $_SESSION["user"] = "";
}
if (!isset($_SESSION['nome'])){
    $_SESSION["nome"] = "";
}
if (!isset($_SESSION['tipo'])){
    $_SESSION["tipo"] = "";
}

$usuario = $_POST["usuario"] ?? null;
$senha = $_POST["senha"] ?? null;
$_SESSION['nome'] = $usuario;
$_SESSION["user"] = $usuario;
$_SESSION["tipo"] = $usuario;
