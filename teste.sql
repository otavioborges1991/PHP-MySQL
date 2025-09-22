SELECT
    jogos.nome,
    generos.nome as genero,
    produtoras.nome as produtora,
    jogos.descricao,
    jogos.nota,
    jogos.capa
FROM jogos
JOIN generos ON jogos.genero_codigo = generos.codigo
JOIN produtoras ON jogos.produtor_codigo = produtoras.codigo;