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
	data_criacao DATE,
	nome VARCHAR(255),
	id_orquestra INT,
	id_instumento INT,

	FOREIGN KEY (id_instumento) REFERENCES instrumento(id_instumento),
	FOREIGN KEY (id_orquestra) REFERENCES orquestra(id_orquestra)
);

INSERT INTO pais (nome) VALUES ("Brasil");
INSERT INTO pais (nome) VALUES ("Jamaica");
INSERT INTO pais (nome) VALUES ("Holanda");
INSERT INTO pais (nome) VALUES ("Austrália");
INSERT INTO pais (nome) VALUES ("Alemanha");
INSERT INTO pais (nome) VALUES ("Rússia");
INSERT INTO pais (nome) VALUES ("Peru");
INSERT INTO pais (nome) VALUES ("Argentina");
INSERT INTO pais (nome) VALUES ("Áustria");
INSERT INTO pais (nome) VALUES ("Chile");

INSERT INTO estado (nome, sigla, id_pais) VALUES ("Rio Grande do Sul", "RS", 0);
INSERT INTO estado (nome, sigla, id_pais) VALUES ("Bahia", "BA", 0);
INSERT INTO estado (nome, sigla, id_pais) VALUES ("Rio Grande do Sul", "RS", 6);
INSERT INTO estado (nome, sigla, id_pais) VALUES ("Rio Grande do Sul", "RS", 6);
INSERT INTO estado (nome, sigla, id_pais) VALUES ("Rio Grande do Sul", "RS", 7);
INSERT INTO estado (nome, sigla, id_pais) VALUES ("Rio Grande do Sul", "RS", 2);
INSERT INTO estado (nome, sigla, id_pais) VALUES ("Rio Grande do Sul", "RS", 5);
INSERT INTO estado (nome, sigla, id_pais) VALUES ("Rio Grande do Sul", "RS", 3);
INSERT INTO estado (nome, sigla, id_pais) VALUES ("Rio Grande do Sul", "RS", 3);
INSERT INTO estado (nome, sigla, id_pais) VALUES ("Rio Grande do Sul", "RS", 4);

INSERT INTO cidade (nome, id_estado) VALUES ("Santa Maria", 0);
INSERT INTO cidade (nome, id_estado) VALUES ("Salvador", 0);
INSERT INTO cidade (nome, id_estado) VALUES ("Quito", 6);
INSERT INTO cidade (nome, id_estado) VALUES ("Machu Pichu", 6);
INSERT INTO cidade (nome, id_estado) VALUES ("Buenos Aires", 7);
INSERT INTO cidade (nome, id_estado) VALUES ("Amsterdã", 2);
INSERT INTO cidade (nome, id_estado) VALUES ("Moscow", 5);
INSERT INTO cidade (nome, id_estado) VALUES ("Camberra", 3);
INSERT INTO cidade (nome, id_estado) VALUES ("Sidney", 3);
INSERT INTO cidade (nome, id_estado) VALUES ("Berlim", 4);

INSERT INTO cidade (data_criacao, nome, id_cidade) VALUES (, 0);
