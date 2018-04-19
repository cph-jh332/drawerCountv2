-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema drawerCounts
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema drawerCounts
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `drawerCounts` DEFAULT CHARACTER SET latin1 ;
USE `drawerCounts` ;

-- -----------------------------------------------------
-- Table `drawerCounts`.`persons`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `drawerCounts`.`persons` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `store` INT(11) NOT NULL,
  `password` VARCHAR(165) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `drawerCounts`.`counts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `drawerCounts`.`counts` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `drawer1` INT(11) NOT NULL,
  `drawer2` INT(11) NOT NULL,
  `total` INT(11) NOT NULL,
  `diff` INT(11) NOT NULL,
  `counterId` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `counterID_idx` (`counterId` ASC),
  CONSTRAINT `counterID`
    FOREIGN KEY (`counterId`)
    REFERENCES `drawerCounts`.`persons` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
