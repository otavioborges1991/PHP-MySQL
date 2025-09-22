-- Active: 1758568665083@@127.0.0.1@3306@bd_games
# Criando o banco de dados bd_games e suas tabelas.

CREATE DATABASE if NOT EXISTS bd_games
DEFAULT CHARACTER SET utf8 
collate utf8_general_ci;

USE bd_games;

create Table if not exists usuarios (
    codigo INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(60) NOT NULL,
    nome_completo VARCHAR(100) NOT NULL,
    tipo VARCHAR(20) NOT NULL DEFAULT 'editor',
    PRIMARY KEY (`codigo`)
) engine=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE if NOT exists generos (
    codigo INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    descricao VARCHAR(255) DEFAULT NULL,
    PRIMARY KEY (codigo)
) engine=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE if NOT exists produtoras (
    codigo INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    pais VARCHAR(50) DEFAULT NULL,
    PRIMARY KEY (codigo)
) engine=InnoDB DEFAULT CHARSET=utf8;

CREATE Table if NOT exists jogos (
    codigo INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    data_lancamento DATE,
    nota DECIMAL(4,2) NOT NULL,
    capa VARCHAR(255) DEFAULT NULL,
    genero_codigo INT,
    produtor_codigo INT,
    PRIMARY KEY (codigo),
    FOREIGN KEY (genero_codigo) REFERENCES generos(codigo) ON DELETE SET NULL ON UPDATE CASCADE,
    FOREIGN KEY (produtor_codigo) REFERENCES produtores(codigo) ON DELETE SET NULL ON UPDATE CASCADE
) engine=InnoDB DEFAULT CHARSET=utf8;
