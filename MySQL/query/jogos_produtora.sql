-- Consulta para listar jogos de uma produtora específica
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
WHERE produtoras.nome = 'Sony'; -- Troque 'Nintendo' pelo nome da produtora desejada