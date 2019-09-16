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

INSERT INTO pais 
(nome) VALUES 
("Brasil"),
("Jamaica"),
("Holanda"),
("Austrália"),
("Alemanha"),
("Rússia"),
("Peru"),
("Argentina"),
("Áustria"),
("Chile");

INSERT INTO estado 
(nome                                , sigla , id_pais) VALUES
("Rio Grande do Sul"                 , "RS"  , 1),
("Bahia"                             , "BA"  , 1),
("Região Metropolitana de Lima"      , "LI"  , 7),
("Machu Picchu"                      , "MP"  , 7),
("Grande Buenos Aires"               , "GB"  , 8),
("Amsterdã"                          , "AM"  , 3),
("Oblast de Moscou"                  , "MO"  , 6),
("Território da Capital Australiana" , "CA"  , 4),
("Nova Gales do Sul"                 , "NG"  , 4),
("Berlim"                            , "BE"  , 5);

INSERT INTO cidade 
(nome           , id_estado) VALUES
("Santa Maria"  , 1),
("Salvador"     , 1),
("Quito"        , 7),
("Machu Picchu" , 7),
("Buenos Aires" , 8),
("Amsterdã"     , 3),
("Moscow"       , 6),
("Camberra"     , 4),
("Sidney"       , 4),
("Berlim"       , 5);

INSERT INTO orquestra 
(data_criacao , nome                  , id_cidade) VALUES
("2019-09-14" , "Caminhada Noturna"   , 2),
("2018-09-14" , "A Noite Mais Quente" , 1),
("2018-04-14" , "O Beijo"             , 4),
("2018-05-25" , "Tarde de Sol"        , 2),
("2002-11-27" , "Perfeita Criação"    , 5),
("2018-03-05" , "Estopim da Nova Era" , 1),
("2018-04-13" , "7ª Sinfonia"         , 7),
("2019-09-15" , "Dia de Luta"         , 2),
("2019-09-16" , "Dia de Glória"       , 8),
("2018-03-08" , "Semblante Querido"   , 1);

INSERT INTO musico
(identidade  , data_nascimento , nome        , id_orquestra) VALUES
("404410042" , "2005-01-01"    , "Nurxu"     , 9),
("162038264" , "2006-01-01"    , "Samantha"  , 2),
("284131799" , "2007-01-01"    , "Brandon"   , 1),
("304158641" , "2002-01-01"    , "Stephanie" , 4),
("247322374" , "2001-01-01"    , "Gofreddo"  , 6),
("103213181" , "2000-01-01"    , "Geraldina" , 3),
("107245206" , "2003-01-01"    , "Delmina"   , 2),
("247035439" , "1998-01-01"    , "Azeglio"   , 9),
("407304411" , "1999-01-01"    , "Gerolamo"  , 5),
("123245539" , "1958-01-01"    , "Senita "   , 10);

INSERT INTO instrumento 
(funcao      , data         , nome         , id_musico) VALUES
("Corda"     , "2005-01-01" , "Baixo"      , 10),
("Corda"     , "2006-01-01" , "Violoncelo" , 1),
("Sopro"     , "2007-01-01" , "Trompa"     , 2),
("Sopro"     , "2002-01-01" , "Trompete"   , 3),
("Sopro"     , "2001-01-01" , "Tuba"       , 4),
("Corda"     , "2000-01-01" , "Violino"    , 5),
("Sopro"     , "2003-01-01" , "Ocarina"    , 6),
("Sopro"     , "1998-01-01" , "Flauta"     , 7),
("Percussão" , "1999-01-01" , "Tambor"     , 8),
("Percussão" , "1958-01-01" , "Cajón"      , 9);

INSERT INTO sinfonia
(compositor       , data_criacao , nome  , id_orquestra , id_instumento) VALUES
("Bob Marley"     , "2005-01-01" , "AAA" , 10            , 10),
("Ed Shreeran"    , "2006-01-01" , "BBB" , 1            , 1),
("Adriana Grande" , "2007-01-01" , "CCC" , 2            , 2),
("Seu Drake"      , "2002-01-01" , "DDD" , 3            , 3),
("TOP"            , "2001-01-01" , "EEE" , 4            , 4),
("Pablo Vittar"   , "2000-01-01" , "FFF" , 5            , 5),
("Mona Lisa"      , "2003-01-01" , "GGG" , 6            , 6),
("Luan Samantha"  , "1998-01-01" , "HHH" , 7            , 7),
("Keanu Reaves"   , "1999-01-01" , "III" , 8            , 8),
("Gustavo Lima"   , "1958-01-01" , "JJJ" , 9            , 9);