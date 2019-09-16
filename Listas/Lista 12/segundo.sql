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

INSERT INTO paciente 
(id_cpf        , nome         , rg          , endereco                             , telefone) VALUES
("92517771014" , "Natália"    , "226866774" , "Rua A Três"                         , "942566354"),
("12656383064" , "Vyedir"     , "437612508" , "Travessa Quatro"                    , "917067159"),
("01671022068" , "Woidir"     , "366422182" , "Rua Antônio Dias de Aguiar"         , "926842789"),
("37531183030" , "Toaradar"   , "216112382" , "Rua Bartolomeu de Gusmao"           , "954955100"),
("53723680046" , "Xior"       , "465245651" , "Rua F"                              , "985272601"),
("30970588003" , "Zaielon"    , "114218754" , "Rua Manoel Machado"                 , "973645031"),
("86205067064" , "Feladizyo"  , "290184058" , "Travessa João Moresco"              , "916606634"),
("29407235084" , "Faorion"    , "158666252" , "Rua Radialista Jarbas Begueristain" , "54141767"),
("43129848088" , "Felaroehoy" , "241601204" , "Rua Ângelo Luiz Monfardini"         , "91065528"),
("38358308051" , "Dehiendîr"  , "490096189" , "Rua Vitória"                        , "74552183");

INSERT INTO medico 
(id_crm       , nome         , rg           , endereco                      , telefone    , especialidade        , cpf) VALUES
("0000000000" , "Frodo"      , "229311155"  , "Rua Ernesto Correa da Silva" , "18787368"  , "Neurocirurgia"      , "12600049290"),
("1111111111" , "Edmundo"    , "226157313"  , "Rua Victor Denardim"         , "925209294" , "Dizer que é Virose" , "89049103235"),
("2222222222" , "Pocahontas" , "190405144"  , "Rua da Felicidade"           , "54224699"  , "Neurocirurgia"      , "68167643239"),
("3333333333" , "Barbie"     , "463773196"  , "Rua L"                       , "925209294" , "Dizer que é Virose" , "52428784285"),
("4444444444" , "Cinderela"  , "185013582"  , "Rua Topázio"                 , "77386998"  , "Neurocirurgia"      , "34316386271"),
("5555555555" , "Harry"      , "502946106"  , "Rua Júlio de Castilhos"      , "77562830"  , "Dizer que é Virose" , "26571973294"),
("6666666666" , "Steve"      , "430144283"  , "Rua Lydio Desconzi"          , "987342448" , "Homeopatia"         , "45997163245"),
("7777777777" , "Peter"      , "7777777777" , "Rua José Chagas Seixas"      , "59549483"  , "Neurocirurgia"      , "54005797288"),
("8888888888" , "Bela"       , "133614177"  , "Rua do Big"                  , "966298667" , "Neurocirurgia"      , "42320994254"),
("9999999999" , "Natasha"    , "405834305"  , "Rua Aqui Perto"              , "87152719"  , "Homeopatia"         , "92886230278");

INSERT INTO prontuario 
(ocorrencia , consulta          , medicamento            , exames          , id_paciente   , id_medico) VALUES
("a"        , "Tossiu bastante" , "Xarope"               , "Tudo em ordem" , "92517771014" , "0000000000"),
("b"        , "Tossiu bastante" , "Dormir"               , "Tudo em ordem" , "12656383064" , "5555555555"),
("c"        , "Tossiu bastante" , "Xarope"               , "Tudo em ordem" , "53723680046" , "0000000000"),
("b"        , "Tossiu bastante" , "Água Diluída em Água" , "Quase Morto"   , "01671022068" , "9999999999"),
("b"        , "Tossiu bastante" , "Xarope"               , "Tudo em ordem" , "37531183030" , "2222222222"),
("c"        , "Tossiu bastante" , "Paracetamol"          , "Tudo em ordem" , "30970588003" , "3333333333"),
("b"        , "Tossiu bastante" , "Paracetamol"          , "Tudo em ordem" , "86205067064" , "2222222222"),
("a"        , "Tossiu bastante" , "Cheiro Verde"         , "Tudo em ordem" , "29407235084" , "6666666666"),
("d"        , "Tossiu bastante" , "Xarope"               , "Tudo em ordem" , "38358308051" , "7777777777"),
("a"        , "Tossiu bastante" , "Xarope"               , "Tudo em ordem" , "43129848088" , "1111111111");