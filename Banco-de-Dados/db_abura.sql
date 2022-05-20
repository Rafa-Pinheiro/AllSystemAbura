CREATE DATABASE db_abura;
USE  db_abura;

CREATE TABLE tb_cargo(
	cd_cargo INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nm_cargo VARCHAR(20) NOT NULL,
    ds_funcao LONGTEXT NOT NULL
);

CREATE TABLE tb_funcionario(
	cd_rm_funcionario INT PRIMARY KEY NOT NULL,
	nm_funcionario VARCHAR(45) NOT NULL,
    ds_senha VARCHAR(16) NOT NULL,
	cd_cpf INT(15) NOT NULL,
	nr_cnh INT(11),
    id_cargo INT NOT NULL,
    dt_nasc DATE NOT NULL,
    FOREIGN KEY (id_cargo) REFERENCES tb_cargo(cd_cargo)
);

CREATE TABLE tb_endereco (
	cd_endereco INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nm_cidade VARCHAR(30) NOT NULL,
    nm_bairro VARCHAR(40) NOT NULL,
    nm_rua VARCHAR(40) NOT NULL,
    nr_numero INT
);

CREATE TABLE tb_atendimento(
	cd_atendimento INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nm_solicitante VARCHAR(45) NOT NULL,
    nm_socorrido VARCHAR(45),
    ds_faixa_etaria_socorrido VARCHAR(20) NOT NULL,
    nr_celular_contato INT(12) NOT NULL,
    ds_descricao_atendente LONGTEXT NOT NULL,
    ds__descricao_medico LONGTEXT NOT NULL,
    st_comorbidade TINYINT
);

CREATE TABLE tb_prioridade (
	cd_prioridade INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nm_prioridade VARCHAR(45) NOT NULL
);

CREATE TABLE tb_ambulancia (
	cd_placa INT(10) PRIMARY KEY NOT NULL,
    nr_chassi INT(45) NOT NULL,
    nr_documento INT NOT NULL,
    dt_ano_fabricacao DATE NOT NULL,
    cd_tipo CHAR(1) NOT NULL
);

CREATE TABLE tb_usuario (
	cd_usuario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    cd_cpf INT NOT NULL,
    nm_nome_completo VARCHAR(60) NOT NULL,
    ds_email VARCHAR(60) NOT NULL,
    cd_senha VARCHAR(30) NOT NULL,
    tel_celular_ativo INT(12) NOT NULL
);

CREATE TABLE tb_ocorrencia (
	cd_envio_ocorrencia INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_endereco INT NOT NULL,
    id_atendimento INT NOT NULL,
    id_prioridade INT NOT NULL,
    id_placa INT NOT NULL,
    FOREIGN KEY (id_endereco) REFERENCES tb_endereco(cd_endereco),
    FOREIGN KEY (id_atendimento) REFERENCES tb_atendimento(cd_atendimento),
    FOREIGN KEY (id_prioridade) REFERENCES tb_prioridade(cd_prioridade),
    FOREIGN KEY (id_placa) REFERENCES tb_ambulancia(cd_placa)
);

CREATE TABLE tb_ocorrencia_usuario (
	cd_ocorrencia_usuario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_envio_ocorrencia INT NOT NULL,
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_envio_ocorrencia) REFERENCES tb_ocorrencia(cd_envio_ocorrencia),
    FOREIGN KEY (id_usuario) REFERENCES tb_usuario(cd_usuario)
);

/* INSERTS PARA TESTE */

/* Declaração de cargo */
INSERT INTO `tb_cargo`(`cd_cargo`, `nm_cargo`, `ds_funcao`) VALUES 
 (null,"motorista",1)
 (null,"atentende",2)
 (null,"medico",3)
 (null,"admin",4)
 (null,"abastecedor",5)

/* Registro de funcionário */
INSERT INTO `tb_funcionario`(`cd_rm_funcionario`, `nm_funcionario`, `ds_senha`, `cd_cpf`, `nr_cnh`, `id_cargo`, `dt_nasc`) VALUES 
(1, "luiz", 123, 12345678, 12345, 1, "2000-02-12"),
(2, "dino", 123, 87654321, 84623, 2, "2000-02-12"),
(3, "rafa", 123, 65748392, 94836, 3, "2000-02-12"),
(4, "raylla", 123, 73548263, 53827, 4, "2000-02-12"),
(5, "diego", 123, 87654321, 84937, 5, "2000-02-12");