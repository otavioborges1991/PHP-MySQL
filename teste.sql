use bd_games;

select * from usuarios;

INSERT INTO usuarios (email, senha, nome_completo, tipo)
VALUES ('otavio.vinicios.borges@gmail.com', "$2y$12$SnE9gi7Ec9TnYFFwuNqEnuWhO86cx0YpVB2H1JYHdmE7/whwklnxO", "Otávio Vinicios Borges", "admin");

INSERT INTO usuarios (email, senha, nome_completo, tipo)
VALUES ('otavio.vinicios.borges@outlook.com', "$2y$12$lQ9OMo9kT1N2f2oJCytVo.aLHaXqsofe/5RSDhbs.gTkzxpsuG.By", "Otávio Vinicios Borges", "editor");

SELECT * FROM usuarios where email LIKE "%otavio%";