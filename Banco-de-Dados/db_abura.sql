CREATE DATABASE db_abura;
USE  db_abura;

CREATE TABLE tb_funcionario(
	cd_funcionario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	cd_rm_funcionario INT NOT NULL,
	nm_funcionario VARCHAR(45) NOT NULL,
	cd_cpf INT(15) NOT NULL,
	cd_crm_medico INT NULL,
	nr_cnh INT(11) NULL,
	dt_vencimento_cnh DATE NULL,
	ds_senha INT NOT NULL,
	dt_nasc DATE NOT NULL,
	nm_cargo ENUM('motorista','Motorista','MOTORISTA','atendente','Atendente','ATENDENTE','medico','Medico','MEDICO','administrador','Administrador','ADMINISTRADOR') NOT NULL
);

CREATE TABLE tb_endereco (
	cd_endereco INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nm_cidade VARCHAR(30) NOT NULL,
    nm_bairro VARCHAR(40) NOT NULL,
    nm_rua VARCHAR(40) NOT NULL,
    nr_numero INT NULL
);

CREATE TABLE tb_atendimento(
	cd_atendimento INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nm_solicitante VARCHAR(45) NOT NULL,
    nm_socorrido VARCHAR(45) NULL,
    ds_faixa_etaria_socorrido VARCHAR(20) NOT NULL,
    ds_descricao_atendente VARCHAR(80) NOT NULL,
    ds__descricao_medico LONGTEXT NULL,
    st_comorbidade ENUM('s', 'sim', 'Sim', 'SIM', 'n', 'nao', 'Nao', 'NAO', 'não', 'Não', 'NÃO') NULL
);

CREATE TABLE tb_prioridade (
	cd_prioridade INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nm_prioridade VARCHAR(45) NOT NULL
);

CREATE TABLE tb_ambulancia (
	cd_ambulancia INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	cd_placa VARCHAR(20) NOT NULL,
    nr_chassi VARCHAR(25) NOT NULL,
    dt_ano_fabricacao YEAR NOT NULL,
    nm_tipo CHAR(1) NOT NULL
);

CREATE TABLE tb_usuario (
	cd_usuario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    cd_cpf INT NOT NULL,
    nm_nome_completo VARCHAR(60) NOT NULL,
    ds_email VARCHAR(60) NOT NULL,
    cd_senha VARCHAR(30) NOT NULL
);

CREATE TABLE tb_ocorrencia (
	cd_envio_ocorrencia INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nr_tempo_estimado TIME NOT NULL,
	nr_tempo_real TIME NOT NULL,
	dt_ocorrencia DATETIME NOT NULL,
    id_endereco INT NOT NULL,
    id_atendimento INT NOT NULL,
    id_prioridade INT NOT NULL,
    id_ambulancia INT NOT NULL,
    FOREIGN KEY (id_endereco) REFERENCES tb_endereco(cd_endereco),
    FOREIGN KEY (id_atendimento) REFERENCES tb_atendimento(cd_atendimento),
    FOREIGN KEY (id_prioridade) REFERENCES tb_prioridade(cd_prioridade),
    FOREIGN KEY (id_ambulancia) REFERENCES tb_ambulancia(cd_ambulancia)
);

CREATE TABLE tb_ocorrencia_usuario (
	cd_ocorrencia_usuario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_envio_ocorrencia INT NOT NULL,
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_envio_ocorrencia) REFERENCES tb_ocorrencia(cd_envio_ocorrencia),
    FOREIGN KEY (id_usuario) REFERENCES tb_usuario(cd_usuario)
); 

/* INSERTS PARA TESTE */

/* Registro de funcionário */
INSERT INTO tb_funcionario(cd_funcionario, cd_rm_funcionario, nm_funcionario, cd_cpf, cd_crm_medico, nr_cnh, dt_vencimento_cnh, ds_senha, dt_nasc, nm_cargo) VALUES 
(null, 1, "funcionario", 123, 123, 123, "2000-02-02", 123, "2000-02-02", "admin"),
(null, 2, "funcionario", 123, 123, 123, "2000-02-02", 123, "2000-02-02", "motorista"),
(null, 3, "funcionario", 123, 123, 123, "2000-02-02", 123, "2000-02-02", "atendente"),
(null, 4, "funcionario", 123, 123, 123, "2000-02-02", 123, "2000-02-02", "medico"),
(null, 5, "funcionario", 123, 123, 123, "2000-02-02", 123, "2000-02-02", "admin");

/* Registro de ambulâncias */
INSERT INTO tb_ambulancia (cd_ambulancia, cd_placa, nr_chassi, dt_ano_fabricacao, nm_tipo) VALUES
(null, "12hdh6", 324555, 2000-02-20, "d"),
(null, "32dhh6", 466855, 2003-11-10, "a"),
(null, "1hfjh6", 327895, 2005-05-12, "c");
 