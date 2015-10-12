-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema quotes_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema quotes_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `quotes_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `quotes_db` ;

-- -----------------------------------------------------
-- Table `quotes_db`.`quotes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `quotes_db`.`quotes` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NULL COMMENT '',
  `quote` VARCHAR(255) NULL COMMENT '',
  `created_at` DATETIME NULL COMMENT '',
  `updated_at` DATETIME NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
