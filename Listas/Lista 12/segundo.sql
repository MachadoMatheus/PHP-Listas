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
	ocorrencia VARCHAR(5),
	consulta TEXT,
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

INSERT INTO medico (id_crm, nome, rg, endereco, telefone, especialidade, cpf) VALUES ("0000000000", "Frodo", "0000000000", "Rua Canário", "900000000", "Neurocirurgia", "0000000000");
INSERT INTO medico (id_crm, nome, rg, endereco, telefone, especialidade, cpf) VALUES ("1111111111", "Edmundo", "1111111111", "Rua dos Bobos", "911111111", "Dizer que é Virose", "111111111");
INSERT INTO medico (id_crm, nome, rg, endereco, telefone, especialidade, cpf) VALUES ("2222222222", "Pocahontas", "2222222222", "Avenida Rio Branco", "92222222", "Neurocirurgia", "222222222");
INSERT INTO medico (id_crm, nome, rg, endereco, telefone, especialidade, cpf) VALUES ("3333333333", "Barbie", "3333333333", "Rua Perto do Posto", "933333333", "Dizer que é Virose", "3333333333");
INSERT INTO medico (id_crm, nome, rg, endereco, telefone, especialidade, cpf) VALUES ("4444444444", "Cinderela", "4444444444", "Rua 7", "944444444", "Neurocirurgia", "4444444444");
INSERT INTO medico (id_crm, nome, rg, endereco, telefone, especialidade, cpf) VALUES ("5555555555", "Harry", "5555555555", "Rua 14", "55555555", "Dizer que é Virose", "5555555555");
INSERT INTO medico (id_crm, nome, rg, endereco, telefone, especialidade, cpf) VALUES ("6666666666", "Steve", "6666666666", "Rua 27", "66666666", "Homeopatia", "6666666666");
INSERT INTO medico (id_crm, nome, rg, endereco, telefone, especialidade, cpf) VALUES ("7777777777", "Peter", "7777777777", "Rua Martha Medeiros", "77777777", "Neurocirurgia", "7777777777");
INSERT INTO medico (id_crm, nome, rg, endereco, telefone, especialidade, cpf) VALUES ("8888888888", "Bela", "8888888888", "Rua do Big", "88888888", "Neurocirurgia", "8888888888");
INSERT INTO medico (id_crm, nome, rg, endereco, telefone, especialidade, cpf) VALUES ("9999999999", "Natasha", "9999999999", "Rua Aqui Perto", "999999999", "Homeopatia", "9999999999");


INSERT INTO prontuario (ocorrencia, consulta, medicamento, exames, id_paciente, id_medico) VALUES ("a", "Tossiu bastante", "Xarope", "Tudo em ordem", "92517771014", "0000000000");
INSERT INTO prontuario (ocorrencia, consulta, medicamento, exames, id_paciente, id_medico) VALUES ("b", "Tossiu bastante", "Dormir", "Tudo em ordem", "12656383064", "5555555555");
INSERT INTO prontuario (ocorrencia, consulta, medicamento, exames, id_paciente, id_medico) VALUES ("c", "Tossiu bastante", "Xarope", "Tudo em ordem", "53723680046", "0000000000");
INSERT INTO prontuario (ocorrencia, consulta, medicamento, exames, id_paciente, id_medico) VALUES ("b", "Tossiu bastante", "Água Diluída em Água", "Quase Morto", "01671022068", "9999999999");
INSERT INTO prontuario (ocorrencia, consulta, medicamento, exames, id_paciente, id_medico) VALUES ("b", "Tossiu bastante", "Xarope", "Tudo em ordem", "37531183030", "2222222222");
INSERT INTO prontuario (ocorrencia, consulta, medicamento, exames, id_paciente, id_medico) VALUES ("c", "Tossiu bastante", "Paracetamol", "Tudo em ordem", "30970588003", "3333333333");
INSERT INTO prontuario (ocorrencia, consulta, medicamento, exames, id_paciente, id_medico) VALUES ("b", "Tossiu bastante", "Paracetamol", "Tudo em ordem", "86205067064", "2222222222");
INSERT INTO prontuario (ocorrencia, consulta, medicamento, exames, id_paciente, id_medico) VALUES ("a", "Tossiu bastante", "Cheiro Verde", "Tudo em ordem", "29407235084", "6666666666");
INSERT INTO prontuario (ocorrencia, consulta, medicamento, exames, id_paciente, id_medico) VALUES ("d", "Tossiu bastante", "Xarope", "Tudo em ordem", "38358308051", "7777777777");
INSERT INTO prontuario (ocorrencia, consulta, medicamento, exames, id_paciente, id_medico) VALUES ("a", "Tossiu bastante", "Xarope", "Tudo em ordem", "43129848088", "1111111111");