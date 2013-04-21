SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;

SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';



CREATE SCHEMA IF NOT EXISTS `BlueMarble` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ;



USE `BlueMarble`;



CREATE  TABLE IF NOT EXISTS `BlueMarble`.`bm_user` (

  `idbm_user` INT(11) NOT NULL AUTO_INCREMENT ,

  `bm_username` VARCHAR(30) NOT NULL ,

  `bm_email` VARCHAR(50) NOT NULL ,

  `bm_pass` VARCHAR(200) NOT NULL ,

  `bm_lang` VARCHAR(5) NOT NULL DEFAULT 'en_US' ,

  `bm_timezone` VARCHAR(50) NULL DEFAULT NULL ,

  `bm_lastlog` DATETIME NULL DEFAULT NULL ,

  `bm_membersince` DATETIME NULL DEFAULT NULL ,

  PRIMARY KEY (`idbm_user`) ,

  UNIQUE INDEX `bm_username_UNIQUE` (`bm_username` ASC) ,

  UNIQUE INDEX `idbm_user_UNIQUE` (`idbm_user` ASC) ,

  UNIQUE INDEX `bm_email_UNIQUE` (`bm_email` ASC) )

ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8

COLLATE = utf8_bin;



CREATE  TABLE IF NOT EXISTS `BlueMarble`.`Images_Dataset` (

  `Mission` VARCHAR(20) NOT NULL ,

  `Roll` VARCHAR(15) NOT NULL ,

  `Frame` INT(11) NOT NULL ,

  `Width` INT(11) NOT NULL ,

  `Height` INT(11) NOT NULL ,

  `Filesize` INT(11) NOT NULL ,

  `CLDP` INT(11) NULL DEFAULT NULL ,

  `Lat` DECIMAL(6) NOT NULL ,

  `Lon` DECIMAL(6) NOT NULL ,

  `Geon` VARCHAR(100) NULL DEFAULT NULL ,

  `Feat` VARCHAR(200) NULL DEFAULT NULL ,

  `Url` VARCHAR(200) NOT NULL ,

  INDEX `Idx_Mission` (`Mission` ASC, `Roll` ASC, `Frame` ASC) ,

  INDEX `Idx_Coord` (`Lat` ASC, `Lon` ASC) ,

  INDEX `Idx_Type` (`Width` ASC, `Height` ASC, `Filesize` ASC) ,

  INDEX `Idx_Url` (`Url` ASC, `Feat` ASC, `Geon` ASC) )

ENGINE = InnoDB

DEFAULT CHARACTER SET = utf8

COLLATE = utf8_bin

COMMENT = '			';





SET SQL_MODE=@OLD_SQL_MODE;

SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;

SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

