SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `dbpeg` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `dbpeg` ;

-- -----------------------------------------------------
-- Table `dbpeg`.`divisi`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbpeg`.`divisi` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nama` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `nama_UNIQUE` (`nama` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbpeg`.`pegawai`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbpeg`.`pegawai` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nip` CHAR(5) NOT NULL ,
  `nama` VARCHAR(45) NOT NULL ,
  `gender` ENUM('L','P') NOT NULL ,
  `divisi_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `nip_UNIQUE` (`nip` ASC) ,
  INDEX `fk_pegawai_divisi` (`divisi_id` ASC) ,
  CONSTRAINT `fk_pegawai_divisi`
    FOREIGN KEY (`divisi_id` )
    REFERENCES `dbpeg`.`divisi` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbpeg`.`gaji`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbpeg`.`gaji` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `pegawai_id` INT NOT NULL ,
  `gapok` DOUBLE NOT NULL ,
  `tunjab` DOUBLE NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_gaji_pegawai1` (`pegawai_id` ASC) ,
  CONSTRAINT `fk_gaji_pegawai1`
    FOREIGN KEY (`pegawai_id` )
    REFERENCES `dbpeg`.`pegawai` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbpeg`.`kursus`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbpeg`.`kursus` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nama` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `nama_UNIQUE` (`nama` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbpeg`.`diklat`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbpeg`.`diklat` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `pegawai_id` INT NOT NULL ,
  `kursus_id` INT NOT NULL ,
  `tempat` TEXT NOT NULL ,
  `tgl_mulai` DATE NULL ,
  `tgl_selesai` DATE NULL ,
  INDEX `fk_pegawai_has_kursus_pegawai1` (`pegawai_id` ASC) ,
  INDEX `fk_pegawai_has_kursus_kursus1` (`kursus_id` ASC) ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_pegawai_has_kursus_pegawai1`
    FOREIGN KEY (`pegawai_id` )
    REFERENCES `dbpeg`.`pegawai` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pegawai_has_kursus_kursus1`
    FOREIGN KEY (`kursus_id` )
    REFERENCES `dbpeg`.`kursus` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
