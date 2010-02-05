--
--
-- ADODB

CREATE TABLE IF NOT EXISTS `adodbsessions` (
  `sesskey` varchar(64) NOT NULL DEFAULT '',
  `expiry` datetime NOT NULL,
  `expireref` varchar(250) DEFAULT '',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `sessdata` longtext,
  PRIMARY KEY (`sesskey`),
  KEY `sess2_expiry` (`expiry`),
  KEY `sess2_expireref` (`expireref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
--
-- COMPANY
CREATE  TABLE IF NOT EXISTS `dams`.`company` (
  `CID` INT(25) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(60) NOT NULL ,
  `ownerLn` VARCHAR(30) NOT NULL ,
  `ownerFn` VARCHAR(30) NOT NULL ,
  `companyName` VARCHAR(25) NULL DEFAULT NULL ,
  `companyAddress` VARCHAR(255) NULL DEFAULT NULL ,
  `companyEmail` VARCHAR(255) NULL DEFAULT NULL ,
  `companyPhone` INT(20) NOT NULL ,
  `password` VARCHAR(100) NOT NULL ,
  `partnership` TINYINT(1) NOT NULL DEFAULT '0' ,
  `status` TINYINT(1) NOT NULL DEFAULT '0' ,
  `type` TINYINT(1) NOT NULL DEFAULT '0' ,
  PRIMARY KEY (`CID`) ,
  INDEX `username` (`username` ASC) )
  ENGINE = MyISAM DEFAULT CHARACTER SET = utf8;

--
--
-- CONTENT

CREATE  TABLE IF NOT EXISTS `dams`.`content` (
  `PID` INT(25) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(60) NOT NULL ,
  `introduction` TEXT NULL ,
  `announcement` TEXT NULL ,
  `template` TEXT NULL ,
  PRIMARY KEY (`PID`) ,
  INDEX `username` (`username` ASC) )
  ENGINE = MyISAM DEFAULT CHARACTER SET = utf8;

--
-- PRODUCT

CREATE  TABLE IF NOT EXISTS `dams`.`product` (
  `RID` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(60) NOT NULL ,
  `productname` VARCHAR(60) NOT NULL,
  `image` VARCHAR(255) NOT NULL ,
  `what` TEXT NOT NULL ,
  `price` INT(50) NOT NULL ,
  `tag` VARCHAR(60) NOT NULL ,
  PRIMARY KEY (`RID`) ,
  INDEX `username` (`username` ASC) )
  ENGINE = MyISAM DEFAULT CHARACTER SET = utf8;
