<?php
require_once "includes/login.php";
require_once "includes/funcoes.php";
logout();
msg_sucesso("Desconectado, você sera redirecionado a pagina principal, se isso não acontecer, <a href='index.php' target='_blank'>clique aqui</a>");
header("Location: index.php");
