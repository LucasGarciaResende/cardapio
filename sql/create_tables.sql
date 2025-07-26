CREATE DATABASE IF NOT EXISTS "cardapio" ;

USE "cardapio";

CREATE TABLE IF NOT EXISTS "combos"(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) UNIQUE,
    descricao VARCHAR(255),
    tipo CHAR,
    preco DECIMAL(10, 2)
);

CREATE TABLE IF NOT EXISTS "pizzas"(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) UNIQUE,
    descricao VARCHAR(255),
    preco_peq DECIMAL(10, 2),
    preco_med DECIMAL(10, 2),
    preco_gra DECIMAL(10, 2),
    preco_giga DECIMAL(10, 2)
);

CREATE TABLE IF NOT EXISTS "hamburgers"(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) UNIQUE,
    descricao VARCHAR(255),
    preco DECIMAL(10, 2)
);

CREATE TABLE IF NOT EXISTS "acompanhamentos"(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) UNIQUE,
    descricao VARCHAR(255),
    preco DECIMAL(10, 2)
);

CREATE TABLE IF NOT EXISTS "bebidas"(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) UNIQUE,
    volume SMALLINT,
    medida_vol VARCHAR(2),
    preco DECIMAL(10, 2)
);