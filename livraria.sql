CREATE DATABASE livraria;

USE livraria;

CREATE TABLE editora (
	cod_editora INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255),
	cnpj VARCHAR(14),
	endereco VARCHAR(255),
	cidade VARCHAR(255)
);

CREATE TABLE autor (
	cod_autor INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255),
	nascimento DATE
);

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


INSERT INTO editora (nome, cnpj, endereco, cidade) VALUES ("Asus" , "11111111111114", "Avenida Roraima nº 1127", "Santa Maria - RS");
INSERT INTO editora (nome, cnpj, endereco, cidade) VALUES ("Samsung" , "22222222222214", "Avenida Roraima nº 2227", "Santa Maria - RS");
INSERT INTO editora (nome, cnpj, endereco, cidade) VALUES ("Apple" , "33333333333314", "Avenida Roraima nº 3327", "Alegrete - RS");
INSERT INTO editora (nome, cnpj, endereco, cidade) VALUES ("Huawei" , "44444444444414", "Avenida Roraima nº 4427", "Porto Alegre - RS");
INSERT INTO editora (nome, cnpj, endereco, cidade) VALUES ("Xiaomi" , "55555555555514", "Avenida Roraima nº 5527", "Santa Maria - RS");
INSERT INTO editora (nome, cnpj, endereco, cidade) VALUES ("LG" , "66666666666614", "Avenida Roraima nº 6627", "Santa Maria - RS");
INSERT INTO editora (nome, cnpj, endereco, cidade) VALUES ("Motorola" , "77777777777714", "Avenida Roraima nº 7727", "Alegrete - RS");
INSERT INTO editora (nome, cnpj, endereco, cidade) VALUES ("Quantum" , "88888888888814", "Avenida Roraima nº 8827", "Porto Alegre - RS");


INSERT INTO autor  (nome, nascimento) VALUES ("Matheus", "2003-01-12");
INSERT INTO autor  (nome, nascimento) VALUES ("Natália", "2002-11-27");
INSERT INTO autor  (nome, nascimento) VALUES ("Natheus", "2018-04-14");
INSERT INTO autor  (nome, nascimento) VALUES ("Netuninho", "2003-01-12");
INSERT INTO autor  (nome, nascimento) VALUES ("Kalino", "2002-11-27");
INSERT INTO autor  (nome, nascimento) VALUES ("Jubarte", "2018-04-14");
INSERT INTO autor  (nome, nascimento) VALUES ("Beluga", "2003-01-12");
INSERT INTO autor  (nome, nascimento) VALUES ("Orca", "2002-11-27");
INSERT INTO autor  (nome, nascimento) VALUES ("Bacia", "2018-04-14");
INSERT INTO autor  (nome, nascimento) VALUES ("Sexta-Feira", "2003-01-12");
INSERT INTO autor  (nome, nascimento) VALUES ("Terça-Feira", "2002-11-27");
INSERT INTO autor  (nome, nascimento) VALUES ("Dia 14", "2018-04-14");
INSERT INTO autor  (nome, nascimento) VALUES ("Dia 27", "2003-01-12");
INSERT INTO autor  (nome, nascimento) VALUES ("Pizza de Calabresa", "2002-11-27");
INSERT INTO autor  (nome, nascimento) VALUES ("Ciao", "2018-04-14");
INSERT INTO autor  (nome, nascimento) VALUES ("Big", "2003-01-12");
INSERT INTO autor  (nome, nascimento) VALUES ("CTISM", "2002-11-27");
INSERT INTO autor  (nome, nascimento) VALUES ("INPE", "2018-04-14");
INSERT INTO autor  (nome, nascimento) VALUES ("Picolé de Uva", "2003-01-12");
INSERT INTO autor  (nome, nascimento) VALUES ("Salada de Fruta", "2002-11-27");
INSERT INTO autor  (nome, nascimento) VALUES ("Jujuba", "2018-04-14");
INSERT INTO autor  (nome, nascimento) VALUES ("Comunismo", "2003-01-12");
INSERT INTO autor  (nome, nascimento) VALUES ("All-Star", "2002-11-27");
INSERT INTO autor  (nome, nascimento) VALUES ("Maurício", "2018-04-14");
INSERT INTO autor  (nome, nascimento) VALUES ("Bolinha", "2003-01-12");
INSERT INTO autor  (nome, nascimento) VALUES ("Martinica", "2002-11-27");
INSERT INTO autor  (nome, nascimento) VALUES ("Chiquita Bacana", "2018-04-14");
INSERT INTO autor  (nome, nascimento) VALUES ("Ônibus", "2003-01-12");
INSERT INTO autor  (nome, nascimento) VALUES ("Colar", "2002-11-27");
INSERT INTO autor  (nome, nascimento) VALUES ("Pulseira", "2018-04-14");

INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (1, 1, "1984", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (1, 1, "Uma breve história do tempo", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (1, 1, "Uma comovente obra de espantoso talento", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (2, 1, "Muito longe de casa: Memórias de um menino soldado", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (2, 1, "Desventuras em série: Um mau começo", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (2, 1, "Uma dobra no tempo", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (3, 1, "As aventuras de Alice no País das Maravilhas & Por trás do espelho", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (3, 1, "Onde vivem os monstros", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (3, 1, "Where the sidewalk ends", 19.99, "2018-04-14", "1");

INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (4, 2, "Valley of the Dolls", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (4, 2, "Invencível", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (4, 2, "O sol é para todos", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (5, 2, "O mundo se despedaça", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (5, 2, "O mundo Segundo Garp", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (5, 2, "The wind-up bird chronicle", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (6, 2, "The wind in the windows", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (6, 2, "The very hungry caterpillar", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (6, 2, "The Things they Carried", 19.99, "2018-04-14", "1");

INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (25, 1, "Armas, Germes e Aço", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (25, 2, "Goodnight Moon", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (25, 3, "Garota Exemplar", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (26, 4, "Fear and Loathing in Las Vegas", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (26, 5, "Fahrenheit 451", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (26, 6, "Os filhos de Duna", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (27, 7, "Diário de Um Banana", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (27, 8, "A coragem de ser imperfeito", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (27, 1, "O Décimo Primeiro Mandamento", 19.99, "2018-04-14", "1");

INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (28, 1, "A Teia de Charlotte", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (28, 2, "Charlie e a Fábrica de Chocolate", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (28, 3, "Ardil 22", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (29, 4, "Breath, Eyes, Memory", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (29, 5, "Amada", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (29, 6, "Bel Canto", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (30, 7, "Are You There, God? It’s Me, Margaret", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (30, 8, "As cinzas de Ângela", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (30, 1, "Todos os homens do presidente", 19.99, "2018-04-14", "1");

INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (22, 8, "Amor nos tempos de cólera", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (22, 8, "Lolita", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (22, 8, "Uma casa na campina", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (23, 8, "O fio da vida", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (23, 8, "The Smartest Kid on Earth", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (23, 8, "Homem Invisível", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (24, 8, "Intérprete de Males", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (24, 8, "A Sangue Frio", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (24, 8, "Harry Potter e a Câmara Secreta", 19.99, "2018-04-14", "1");

INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (19, 7, "Persepolis: The Story of a Childhood", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (19, 7, "On the Road", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (19, 7, "Servidão Humana", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (20, 7, "Moneyball: O homem que mudou o jogo", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (20, 7, "Os filhos da meia-noite", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (20, 7, "Middlesex", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (21, 7, "Me Talk Pretty One Day", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (21, 7, "Em busca de sentido", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (21, 7, "Love Medicine", 19.99, "2018-04-14", "1");

INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (16, 6, "A Fantástica vida breve de Oscar Wao", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (16, 6, "A Menina que Roubava Livros", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (16, 6, "Malcolm X: Uma vida de reinvenções", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (17, 6, "The Amazing Adventures of Kavalier & Clay", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (17, 6, "Team of Rivals: The Political Genious of Abraham Lincoln", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (17, 6, "Slaughterhouse-Five", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (18, 6, "Primavera silenciosa", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (18, 6, "Orgulho e Preconceito", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (18, 6, "O Completo de Portnoy", 19.99, "2018-04-14", "1");

INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (13, 5, "The Handmaid's Tale", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (13, 5, "A bússola de ouro", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (13, 5, "O doador de memórias", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (14, 5, "A culpa é das estrelas", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (14, 5, "O diário de Anne Frank", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (14, 5, "O demônio na cidade branca", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (15, 5, "As correções", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (15, 5, "The Color of Water: A Black Man's Tribute to His White Mother", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (15, 5, "Apanhador no Campo de Centeio", 19.99, "2018-04-14", "1");

INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (10, 4, "O homem que confundiu sua mulher com um chapéu", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (10, 4, "O senhor dos Anéis", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (10, 4, "O Vulto das Torres - A Al-Qaeda e o Caminho até o 11/9: A Al-Qaeda e o caminho até o 11/09", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (11, 4, "O sono eterno", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (11, 4, "Percy Jackson e o ladrão de Raios", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (11, 4, "The Liars' Club: A Memoir", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (12, 4, "A vida imortal de Henrierra Lacks", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (12, 4, "Jogos Vorazes", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (12, 4, "The house at Pooh Corner", 19.99, "2018-04-14", "1");

INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (7, 3, "O sol também se levanta", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (7, 3, "O iluminado", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (7, 3, "A história secreta", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (8, 3, "A estrada", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (8, 3, "Os eleitos", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (8, 3, "The Power Broker: Robert Moses and the fall of New York", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (9, 3, "The poisonwood Bible", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (9, 3, "Tudo depende de como você vê as coisas", 19.99, "2018-04-14", "1");
INSERT INTO livro (cod_autor, cod_editora, titulo, valor, publicacao, volume) VALUES (9, 3, "O dilema do onívoro", 19.99, "2018-04-14", "1");