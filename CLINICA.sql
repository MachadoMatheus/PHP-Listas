CREATE DATABASE clinica;
USE clinica;

CREATE TABLE paciente (
	cpf CHAR(14) PRIMARY KEY NOT NULL,
	rg INT,
	nome_completo VARCHAR(255),
	endereco VARCHAR(255),
	telefone VARCHAR(17), /*+55(55)98452-3099*/
	dt_nasc DATE,
	numero_quarto INT,

	FOREIGN KEY(numero_quarto) REFERENCES quarto(numero_quarto)
);

CREATE TABLE medico (
	crm CHAR(7) PRIMARY KEY NOT NULL,
	nome_completo VARCHAR(255),
	id_departamento INT,

	FOREIGN KEY(id_departamento) REFERENCES departamento(id_departamento)
);

CREATE TABLE quarto (
	numero_quarto INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	id_departamento INT,
	cpf_paciente CHAR(14),

	FOREIGN KEY(id_departamento) REFERENCES departamento(id_departamento)
);

CREATE TABLE departamento (
	id_departamento INT PRIMARY KEY NOT NULL AUTO_INCREMENT
);

CREATE TABLE salario (
	id_salario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	ano YEAR,
	mes TINYINT,
	crm_medico CHAR(7),

	FOREIGN KEY(crm_medico) REFERENCES medico(crm)
);

CREATE TABLE consulta (
	id_consulta INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	crm_medico CHAR(7),
	cpf_paciente CHAR(14),
	dt_atendimento DATE,

	FOREIGN KEY(crm_medico) REFERENCES medico(crm),
	FOREIGN KEY(cpf_paciente) REFERENCES paciente(cpf)
);

CREATE TABLE especialidade (
	id_especialidade INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50),
	descricao TEXT
);

CREATE TABLE medico_tem_especialidade (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	crm_medico CHAR(7),
	id_especialidade INT,

	FOREIGN KEY(crm_medico) REFERENCES medico(crm),
	FOREIGN KEY(id_especialidade) REFERENCES especialidade(id_especialidade)
);