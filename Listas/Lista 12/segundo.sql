#Crie um BD que contenha uma tabela para um sistema de login. Deve conter id, nome completo, login e senha. 
#Ainda, insira 10 dados válidos nessa tabela. Faça tudo por SQL! (Não esqueça de salvar o que foi feito).

CREATE DATABASE segundo;
USE segundo;

CREATE TABLE paciente (
	id_cpf CHAR(11) PRIMARY KEY,
	nome VARCHAR(255),
	rg VARCHAR(14),
	endereco VARCHAR(255),
	telefone VARCHAR(9)
);

CREATE TABLE medico (
	id_crm VARCHAR(14) PRIMARY KEY,
	rg VARCHAR(14),
	nome VARCHAR(255),
	telefone VARCHAR(9),
	endereco VARCHAR(255),
	especialidade VARCHAR(255),
	cpf CHAR(11)
);

CREATE TABLE prontuario (
	id_pront INT PRIMARY KEY AUTO_INCREMENT,
	ocorrencia VARCHAR(255),
	consulta VARCHAR(255),
	data_alteracao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	medicamento VARCHAR(255),
	exames VARCHAR(255),
	id_paciente CHAR(11),
	id_medico VARCHAR(14),

	FOREIGN KEY (id_paciente) REFERENCES paciente(id_cpf),
	FOREIGN KEY (id_medico) REFERENCES medico(id_crm)
);

INSERT INTO paciente (id_cpf, nome, rg, endereco, telefone) VALUES ("92517771014", "Natália", "226866774", "Rua A Três", "942566354");
INSERT INTO paciente (id_cpf, nome, rg, endereco, telefone) VALUES ("12656383064", "Vyedir", "437612508", "Travessa Quatro", "917067159");
INSERT INTO paciente (id_cpf, nome, rg, endereco, telefone) VALUES ("01671022068", "Woidir", "366422182", "Rua Antônio Dias de Aguiar", "926842789");
INSERT INTO paciente (id_cpf, nome, rg, endereco, telefone) VALUES ("37531183030", "Toaradar", "216112382", "Rua Bartolomeu de Gusmao", "954955100");
INSERT INTO paciente (id_cpf, nome, rg, endereco, telefone) VALUES ("53723680046", "Xior", "465245651", "Rua F", "985272601");
INSERT INTO paciente (id_cpf, nome, rg, endereco, telefone) VALUES ("30970588003", "Zaielon", "114218754", "Rua Manoel Machado", "973645031");
INSERT INTO paciente (id_cpf, nome, rg, endereco, telefone) VALUES ("86205067064", "Feladizyo", "290184058", "Travessa João Moresco", "916606634");
INSERT INTO paciente (id_cpf, nome, rg, endereco, telefone) VALUES ("29407235084", "Faorion", "158666252", "Rua Radialista Jarbas Begueristain", "54141767");
INSERT INTO paciente (id_cpf, nome, rg, endereco, telefone) VALUES ("43129848088", "Felaroehoy", "241601204", "Rua Ângelo Luiz Monfardini", "91065528");
INSERT INTO paciente (id_cpf, nome, rg, endereco, telefone) VALUES ("38358308051", "Dehiendîr", "490096189", "Rua Vitória", "74552183");


INSERT INTO medico (id_crm, nome, rg, endereco, telefone, especialidade, cpf)

INSERT INTO paciente (ocorrencia, consulta, medicamento, exames, id_paciente, id_medico)