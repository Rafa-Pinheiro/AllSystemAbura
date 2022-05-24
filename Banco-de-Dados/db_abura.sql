SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema db_abura
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_abura
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_abura` DEFAULT CHARACTER SET utf8 ;
USE `db_abura` ;

-- -----------------------------------------------------
-- Table `db_abura`.`tb_endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_abura`.`tb_endereco` (
  `cd_endereco` INT NOT NULL AUTO_INCREMENT,
  `nm_cidade` VARCHAR(30) NOT NULL,
  `nm_bairro` VARCHAR(40) NOT NULL,
  `nm_rua` VARCHAR(40) NOT NULL,
  `nr_numero` INT NULL,
  PRIMARY KEY (`cd_endereco`)
  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_abura`.`tb_atendimento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_abura`.`tb_atendimento` (
  `cd_atendimento` INT NOT NULL AUTO_INCREMENT,
  `nm_solicitante` VARCHAR(45) NOT NULL,
  `nm_socorrido` VARCHAR(45) NULL,
  `ds_faixa_etaria_socorrido` VARCHAR(20) NOT NULL,
  `nr_telefone_contato` INT(10) NOT NULL,
  `ds_descricao_atendente` LONGTEXT NOT NULL,
  `ds_descricao_medico` LONGTEXT NOT NULL,
  `st_comorbidade` TINYINT NULL,
  PRIMARY KEY (`cd_atendimento`)
  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_abura`.`tb_prioridade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_abura`.`tb_prioridade` (
  `cd_prioridade` INT NOT NULL AUTO_INCREMENT,
  `nm_prioridade` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cd_prioridade`)
  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_abura`.`tb_ambulancia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_abura`.`tb_ambulancia` (
  `cd_placa` INT(10) NOT NULL,
  `cd_imei` INT NOT NULL,
  `nr_chassi` INT(45) NOT NULL,
  `nr_documento` INT NOT NULL,
  `dt_ano_fabricacao` DATE NOT NULL,
  `cd_tipo` CHAR(1) NOT NULL,
  PRIMARY KEY (`cd_placa`)
  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_abura`.`tb_cargo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_abura`.`tb_cargo` (
  `cd_cargo` INT NOT NULL AUTO_INCREMENT,
  `nm_cargo` VARCHAR(20) NOT NULL,
  `ds_funcao` LONGTEXT NOT NULL,
  `nr_nivel_hierarquico` INT(1) NOT NULL,
  PRIMARY KEY (`cd_cargo`)
  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_abura`.`tb_funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_abura`.`tb_funcionario` (
  `cd_rm_funcionario` INT NOT NULL,
  `nm_funcionario` VARCHAR(45) NOT NULL,
  `cd_cpf` INT(15) NOT NULL,
  `cd_crm_medico` INT NULL,
  `nr_cnh` INT(11) NULL,
  `dt_vencimento_cnh` DATE NULL,
  `ds_senha` INT NOT NULL,
  `dt_nasc` DATE NOT NULL,
  `id_cargo` INT NOT NULL,
  PRIMARY KEY (`cd_rm_funcionario`),
  INDEX `fk_tb_funcionario_tb_cargo1_idx` (`id_cargo` ASC),
  CONSTRAINT `fk_tb_funcionario_tb_cargo1`
    FOREIGN KEY (`id_cargo`)
    REFERENCES `mydb`.`tb_cargo` (`cd_cargo`)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_abura`.`tb_ocorrencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_abura`.`tb_ocorrencia` (
  `cd_envio_ocorrencia` INT NOT NULL AUTO_INCREMENT,
  `nr_tempo_estimado` TIME NOT NULL,
  `nr_tempo_real` TIME NOT NULL,
  `dt_ocorrencia` DATETIME NOT NULL,
  `id_endereco` INT NOT NULL,
  `id_atendimento` INT NOT NULL,
  `id_prioridade` INT NOT NULL,
  `id_placa` INT NOT NULL,
  PRIMARY KEY (`cd_envio_ocorrencia`),
  INDEX `fk_tb_ocorrencia_tb_endereco1_idx` (`id_endereco` ASC),
  INDEX `fk_tb_ocorrencia_tb_atendimento1_idx` (`id_atendimento` ASC),
  INDEX `fk_tb_ocorrencia_tb_prioridade_caso1_idx` (`id_prioridade` ASC),
  INDEX `fk_tb_ocorrencia_tb_ambulancia1_idx` (`id_placa` ASC),
  CONSTRAINT `fk_tb_ocorrencia_tb_endereco1`
    FOREIGN KEY (`id_endereco`)
    REFERENCES `mydb`.`tb_endereco` (`cd_endereco`),
  CONSTRAINT `fk_tb_ocorrencia_tb_atendimento1`
    FOREIGN KEY (`id_atendimento`)
    REFERENCES `mydb`.`tb_atendimento` (`cd_atendimento`),
  CONSTRAINT `fk_tb_ocorrencia_tb_prioridade_caso1`
    FOREIGN KEY (`id_prioridade`)
    REFERENCES `mydb`.`tb_prioridade` (`cd_prioridade`),
  CONSTRAINT `fk_tb_ocorrencia_tb_ambulancia1`
    FOREIGN KEY (`id_placa`)
    REFERENCES `mydb`.`tb_ambulancia` (`cd_placa`)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_abura`.`tb_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_abura`.`tb_usuario` (
  `cd_usuario` INT NOT NULL AUTO_INCREMENT,
  `cd_cpf` INT NOT NULL,
  `nm_nome` VARCHAR(60) NOT NULL,
  `ds_email` VARCHAR(60) NOT NULL,
  `cd_senha` VARCHAR(30) NOT NULL,
  `tel_celular_ativo` INT(10) NOT NULL,
  PRIMARY KEY (`cd_usuario`)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_abura`.`tb_ocorrencia_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_abura`.`tb_ocorrencia_usuario` (
  `cd_ocorrencia_usuario` INT NOT NULL AUTO_INCREMENT,
  `id_envio_ocorrencia` INT NOT NULL,
  `id_usuario` INT NOT NULL,
  INDEX `fk_tb_cad_usuario_has_tb_ocorrencia_tb_ocorrencia1_idx` (`id_envio_ocorrencia` ASC),
  PRIMARY KEY (`cd_ocorrencia_usuario`),
  INDEX `fk_tb_ocorrencia_usuario_tb_cad_usuario1_idx` (`id_usuario` ASC),
  CONSTRAINT `fk_tb_cad_usuario_has_tb_ocorrencia_tb_ocorrencia1`
    FOREIGN KEY (`id_envio_ocorrencia`)
    REFERENCES `mydb`.`tb_ocorrencia` (`cd_envio_ocorrencia`),
  CONSTRAINT `fk_tb_ocorrencia_usuario_tb_cad_usuario1`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `mydb`.`tb_usuario` (`cd_usuario`)
)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

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
