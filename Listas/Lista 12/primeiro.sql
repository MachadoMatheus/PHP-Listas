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

INSERT INTO login 
(primeiro_nome, ultimo_nome	  , id_login  	, senha) VALUES 
("Natália"   , "Pires"   	  , "natalinha" , "272727"),
("Matheus"   , "Machado" 	  , "teteus"    , "121212"),
("Natália"   , "Galáxia" 	  , "galaxia"   , "271227"),
("Natália"   , "Bolinha" 	  , "bolinha"   , "141427"),
("Natheus"   , "Netuno"  	  , "netuno"    , "141414"),
("Beluga"    , ", o Curto"    , "beluga"   	, "727272"),
("Jubarte"   , ", o Breve"    , "jubarte"  	, "jjjjjj"),
("Orca"      , ", a Só"       , "orca"     	, "oooooo"),
("Cachalote" , ", a Grande"   , "charlote" 	, "cacaca"),
("Franca"    , ", a Fraca"    , "franca"   	, "frfrfr");