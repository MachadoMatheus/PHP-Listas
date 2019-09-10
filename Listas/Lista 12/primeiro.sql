#Crie um BD que contenha uma tabela para um sistema de login. Deve conter id, nome completo, login e senha. 
#Ainda, insira 10 dados válidos nessa tabela. Faça tudo por SQL! (Não esqueça de salvar o que foi feito).

CREATE DATABASE primeiro;
USE primeiro;

CREATE TABLE login (
	id_login INT PRIMARY KEY AUTO_INCREMENT,
	primeiro_nome VARCHAR(255),
	ultimo_nome VARCHAR(255),
	login VARCHAR(255),
	senha VARCHAR(255)
);

INSERT INTO login (primeiro_nome, ultimo_nome, login, senha) VALUES ("Natália", "Pires", "natalinha", "272727");
INSERT INTO login (primeiro_nome, ultimo_nome, login, senha) VALUES ("Matheus", "Machado", "teteus", "121212");
INSERT INTO login (primeiro_nome, ultimo_nome, login, senha) VALUES ("Natália", "Galáxia", "galaxia", "271227");
INSERT INTO login (primeiro_nome, ultimo_nome, login, senha) VALUES ("Natália", "Bolinha", "bolinha", "141427");
INSERT INTO login (primeiro_nome, ultimo_nome, login, senha) VALUES ("Natheus", "Netuno", "netuno", "141414");
INSERT INTO login (primeiro_nome, ultimo_nome, login, senha) VALUES ("Beluga", ", o Curto", "beluga", "727272");
INSERT INTO login (primeiro_nome, ultimo_nome, login, senha) VALUES ("Jubarte", ", o Breve", "jubarte", "jjjjjj");
INSERT INTO login (primeiro_nome, ultimo_nome, login, senha) VALUES ("Orca", ", a Só", "orca", "oooooo");
INSERT INTO login (primeiro_nome, ultimo_nome, login, senha) VALUES ("Cachalote", ", a Grande", "charlote", "cacaca");
INSERT INTO login (primeiro_nome, ultimo_nome, login, senha) VALUES ("Franca", ", a Fraca", "franca", "frfrfr");