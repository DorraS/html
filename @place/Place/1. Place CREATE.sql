-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema place
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `place` ;

-- -----------------------------------------------------
-- Schema place
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `place` DEFAULT CHARACTER SET utf8 ;
USE `place` ;

-- -----------------------------------------------------
-- Table `place`.`Etudiant`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `place`.`Etudiant` ;

CREATE TABLE IF NOT EXISTS `place`.`Etudiant` (
  `idEtudiant` INT NOT NULL AUTO_INCREMENT,
  `Prénom` VARCHAR(30) NOT NULL,
  `Nom` VARCHAR(30),
  PRIMARY KEY (`idEtudiant`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `place`.`Cours`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `place`.`Cours` ;

CREATE TABLE IF NOT EXISTS `place`.`Cours` (
  `idCours` INT NOT NULL AUTO_INCREMENT,
  `DateCours` DATE NOT NULL,
  `SalleCours` VARCHAR(5) NOT NULL,
  PRIMARY KEY (`idCours`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `place`.`Place`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `place`.`Place` ;

CREATE TABLE IF NOT EXISTS `place`.`Place` (
  `idEtudiant` INT NOT NULL,
  `idCours` INT NOT NULL,
  `NuméroPlace` INT NOT NULL,
  PRIMARY KEY (`idEtudiant`, `idCours`),
  INDEX `fk_Etudiant_has_Cours_Cours1_idx` (`idCours` ASC),
  INDEX `fk_Etudiant_has_Cours_Etudiant_idx` (`idEtudiant` ASC),
  CONSTRAINT `fk_Etudiant_has_Cours_Etudiant`
    FOREIGN KEY (`idEtudiant`)
    REFERENCES `place`.`Etudiant` (`idEtudiant`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Etudiant_has_Cours_Cours1`
    FOREIGN KEY (`idCours`)
    REFERENCES `place`.`Cours` (`idCours`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
