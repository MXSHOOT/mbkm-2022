SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `dbtraining` ;
USE `dbtraining` ;

-- -----------------------------------------------------
-- Table `dbtraining`.`kategori_kursus`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbtraining`.`kategori_kursus` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `pemrograman` VARCHAR(45) NULL ,
  `jaringan` VARCHAR(45) NULL ,
  `office` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbtraining`.`kursus`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbtraining`.`kursus` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `PHP` VARCHAR(45) NULL ,
  `Linux` VARCHAR(45) NULL ,
  `Ms. Office` VARCHAR(45) NULL ,
  `kategori_kursus_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_kursus_kategori_kursus` (`kategori_kursus_id` ASC) ,
  CONSTRAINT `fk_kursus_kategori_kursus`
    FOREIGN KEY (`kategori_kursus_id` )
    REFERENCES `dbtraining`.`kategori_kursus` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbtraining`.`kategori_pengajar`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbtraining`.`kategori_pengajar` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `internal` VARCHAR(45) NULL ,
  ` eksternal` VARCHAR(45) NULL ,
  ` freelancer` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbtraining`.`pengajar`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbtraining`.`pengajar` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nama` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `kategori_pengajar_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  INDEX `fk_pengajar_kategori_pengajar1` (`kategori_pengajar_id` ASC) ,
  CONSTRAINT `fk_pengajar_kategori_pengajar1`
    FOREIGN KEY (`kategori_pengajar_id` )
    REFERENCES `dbtraining`.`kategori_pengajar` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbtraining`.`kategori_training`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbtraining`.`kategori_training` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `public` VARCHAR(45) NULL ,
  `in_house` VARCHAR(45) NULL ,
  `private` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbtraining`.`peserta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbtraining`.`peserta` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nama` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbtraining`.`training`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbtraining`.`training` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `tgl mulai` TIME NOT NULL ,
  `tgl akhir` TIME NOT NULL ,
  `tempat` VARCHAR(45) NOT NULL ,
  `kategori_training_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_training_kategori_training1` (`kategori_training_id` ASC) ,
  CONSTRAINT `fk_training_kategori_training1`
    FOREIGN KEY (`kategori_training_id` )
    REFERENCES `dbtraining`.`kategori_training` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbtraining`.`pengajar_has_training`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbtraining`.`pengajar_has_training` (
  `pengajar_id` INT NOT NULL ,
  `training_id` INT NOT NULL ,
  PRIMARY KEY (`pengajar_id`, `training_id`) ,
  INDEX `fk_pengajar_has_training_pengajar1` (`pengajar_id` ASC) ,
  INDEX `fk_pengajar_has_training_training1` (`training_id` ASC) ,
  CONSTRAINT `fk_pengajar_has_training_pengajar1`
    FOREIGN KEY (`pengajar_id` )
    REFERENCES `dbtraining`.`pengajar` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pengajar_has_training_training1`
    FOREIGN KEY (`training_id` )
    REFERENCES `dbtraining`.`training` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbtraining`.`pengajar_has_peserta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbtraining`.`pengajar_has_peserta` (
  `pengajar_id` INT NOT NULL ,
  `peserta_id` INT NOT NULL ,
  PRIMARY KEY (`pengajar_id`, `peserta_id`) ,
  INDEX `fk_pengajar_has_peserta_pengajar1` (`pengajar_id` ASC) ,
  INDEX `fk_pengajar_has_peserta_peserta1` (`peserta_id` ASC) ,
  CONSTRAINT `fk_pengajar_has_peserta_pengajar1`
    FOREIGN KEY (`pengajar_id` )
    REFERENCES `dbtraining`.`pengajar` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pengajar_has_peserta_peserta1`
    FOREIGN KEY (`peserta_id` )
    REFERENCES `dbtraining`.`peserta` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
