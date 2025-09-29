-- Active: 1758661370891@@127.0.0.1@3306@bd_games
use bd_games;

SELECT generos.nome AS nome_genero
FROM jogos
JOIN generos ON jogos.genero_codigo = generos.codigo
WHERE jogos.codigo = 2; -- Substitua 5 pelo código do jogo desejado