CREATE DATABASE `adatbazis`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `adatbazis`;

CREATE TABLE `felhasznalok` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `csaladi_nev` varchar(45) NOT NULL default '',
  `uto_nev` varchar(45) NOT NULL default '',
  `bejelentkezes` varchar(12) NOT NULL default '',
  `jelszo` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `felhasznalok` (`id`,`csaladi_nev`,`uto_nev`,`bejelentkezes`,`jelszo`) VALUES 
 (1,'Családi_1','Utónév_1','Login1',sha1('login1')),
 (2,'Családi_2','Utónév_2','Login2',sha1('login2'));

CREATE TABLE `uzenetek` (
  `uzenet` varchar(100) NOT NULL default '',
  `nev` varchar(15) NOT NULL default '',
  `datum` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`uzenet`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;
