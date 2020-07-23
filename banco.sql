
-- Script para criação da tabela que foi utilizada na aplicação.
CREATE SCHEMA `testehibrido` ;

CREATE TABLE `testehibrido`.`clientes` (
    `id_clientes` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `cfp` VARCHAR(100) NOT NULL,
    `telefone` VARCHAR(45) NULL,
    PRIMARY KEY (`id_clientes`));