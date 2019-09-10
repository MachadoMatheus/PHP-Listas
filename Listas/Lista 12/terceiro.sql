#Crie um BD que contenha uma tabela para um sistema de login. Deve conter id, nome completo, login e senha. 
#Ainda, insira 10 dados válidos nessa tabela. Faça tudo por SQL! (Não esqueça de salvar o que foi feito).

CREATE DATABASE terceiro;
USE terceiro;

CREATE TABLE pais (
	id_pais INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255)
);

CREATE TABLE estado (
	id_estado INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255),
	sigla CHAR(2),
	id_pais INT,

	FOREIGN KEY (id_pais) REFERENCES pais(id_pais)
);

CREATE TABLE cidade (
	id_cidade INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255),
	id_estado INT,

	FOREIGN KEY (id_estado) REFERENCES estado(id_estado)
);

CREATE TABLE orquestra (
	id_orquestra INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	data_criacao DATE,
	nome VARCHAR(255),
	id_cidade INT,

	FOREIGN KEY (id_cidade) REFERENCES cidade(id_cidade)
);

CREATE TABLE musico (
	id_musico INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	identidade VARCHAR(14),
	data_nascimento DATE,
	nome VARCHAR(255),
	id_orquestra INT,

	FOREIGN KEY (id_orquestra) REFERENCES orquestra(id_orquestra)
);

CREATE TABLE instrumento (
	id_instumento INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	funcao VARCHAR(255),
	data DATE,
	nome VARCHAR(255),
	id_musico INT,

	FOREIGN KEY (id_musico) REFERENCES musico(id_musico)
);

CREATE TABLE sinfonia (
	id_sinfonia INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	compositor VARCHAR(255),
	data_criacaocao DATE,
	nome VARCHAR(255),
	id_orquestra INT,
	id_instumento INT,

	FOREIGN KEY (id_instumento) REFERENCES instrumento(id_instumento),
	FOREIGN KEY (id_orquestra) REFERENCES orquestra(id_orquestra)
);