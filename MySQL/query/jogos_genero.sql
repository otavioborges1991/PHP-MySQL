-- Consulta para jogos de um genero específico
SELECT
    jogos.nome,
    generos.nome AS genero,
    produtoras.nome AS produtora,
    jogos.descricao,
    jogos.nota,
    jogos.capa
FROM jogos
JOIN generos ON jogos.genero_codigo = generos.codigo
JOIN produtoras ON jogos.produtor_codigo = produtoras.codigo
WHERE generos.nome = 'Aventura'; -- Substitua 'Aventura' pelo gênero desejado