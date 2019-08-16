CREATE DATABASE livraria;

USE livraria;

CREATE TABLE livro (
	cod_livro INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	cod_autor INT,
	cod_editora INT,
	titulo VARCHAR(255),
	valor NUMERIC,
	publicacao DATE,
	volume CHAR(1),

	FOREIGN KEY(cod_editora) REFERENCES editora(cod_editora),
	FOREIGN KEY(cod_autor) REFERENCES autor(cod_autor)
);

CREATE TABLE editora (
	cod_editora INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	razao VARCHAR(255),
	endereco VARCHAR(255),
	CGC VARCHAR(255),
	cidade VARCHAR(255)
);

CREATE TABLE autor (
	cod_autor INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255),
	nascimento DATE
);

