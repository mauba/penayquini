-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2014 at 01:11 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db483032`
--
CREATE DATABASE IF NOT EXISTS `db483032` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db483032`;

-- --------------------------------------------------------

--
-- Table structure for table `com_competicio`
--

DROP TABLE IF EXISTS `com_competicio`;
CREATE TABLE IF NOT EXISTS `com_competicio` (
  `ID_COM` int(11) NOT NULL AUTO_INCREMENT,
  `COM_NOM` varchar(45) COLLATE utf8_bin NOT NULL,
  `COM_ANY_ACTUAL` int(11) NOT NULL,
  `COM_JORNADA_ACTUAL` int(11) NOT NULL,
  PRIMARY KEY (`ID_COM`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Llistat de competicions' AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `equ_equip`
--

DROP TABLE IF EXISTS `equ_equip`;
CREATE TABLE IF NOT EXISTS `equ_equip` (
  `ID_EQU` int(11) NOT NULL,
  `EQU_NOM_CURT` varchar(3) COLLATE utf8_bin NOT NULL,
  `EQU_NOM` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID_EQU`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Llista d''equips.';

-- --------------------------------------------------------

--
-- Table structure for table `lkp_resultat`
--

DROP TABLE IF EXISTS `lkp_resultat`;
CREATE TABLE IF NOT EXISTS `lkp_resultat` (
  `idlkp_resultat` int(11) NOT NULL,
  `valor_resultat` varchar(1) COLLATE utf8_bin NOT NULL,
  `descripcio_resultat` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idlkp_resultat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Taula diccionari de resultats';

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

DROP TABLE IF EXISTS `participant`;
CREATE TABLE IF NOT EXISTS `participant` (
  `id_p` int(2) NOT NULL,
  `Nom_P` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `cognoms_p` varchar(30) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `alias` varchar(25) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `rol` tinyint(1) NOT NULL,
  `contrasenya` varchar(15) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `puntuacio` int(5) NOT NULL DEFAULT '0',
  `ult_punt` int(5) NOT NULL DEFAULT '0',
  `Posicio` int(2) NOT NULL,
  `canvi` int(1) NOT NULL DEFAULT '0',
  `correu` varchar(254) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `estat` varchar(25) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `par_partit`
--

DROP TABLE IF EXISTS `par_partit`;
CREATE TABLE IF NOT EXISTS `par_partit` (
  `PAR_JORNADA` int(11) NOT NULL,
  `PAR_ANY` int(11) NOT NULL,
  `ID_EQU_LOCAL` int(11) NOT NULL,
  `ID_EQU_VISITANT` int(11) NOT NULL,
  `ID_COM` int(11) NOT NULL,
  PRIMARY KEY (`PAR_JORNADA`,`PAR_ANY`,`ID_EQU_LOCAL`,`ID_EQU_VISITANT`,`ID_COM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Calendari de primera divisio';

-- --------------------------------------------------------

--
-- Table structure for table `pre_premi`
--

DROP TABLE IF EXISTS `pre_premi`;
CREATE TABLE IF NOT EXISTS `pre_premi` (
  `PTQ_ANY` int(11) NOT NULL,
  `PTQ_JORNADA` int(11) NOT NULL,
  `PRE_IMPORT` float(10,2) NOT NULL,
  PRIMARY KEY (`PTQ_ANY`,`PTQ_JORNADA`),
  KEY `PTQ_JORNADA` (`PTQ_JORNADA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `prm_parametres`
--

DROP TABLE IF EXISTS `prm_parametres`;
CREATE TABLE IF NOT EXISTS `prm_parametres` (
  `PRM_NAME` varchar(64) COLLATE utf8_bin NOT NULL,
  `PRM_VALUE` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`PRM_NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Parametres a utilitzar en l''aplicació web';

-- --------------------------------------------------------

--
-- Table structure for table `ptq_partit_quiniela`
--

DROP TABLE IF EXISTS `ptq_partit_quiniela`;
CREATE TABLE IF NOT EXISTS `ptq_partit_quiniela` (
  `PTQ_ANY` int(11) NOT NULL,
  `PTQ_JORNADA` int(11) NOT NULL,
  `ID_EQU_LOCAL` int(11) NOT NULL,
  `ID_EQU_VISITANT` int(11) NOT NULL,
  `PTQ_CASELLA` int(11) NOT NULL,
  `PTQ_RESULTAT` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`PTQ_ANY`,`PTQ_JORNADA`,`ID_EQU_LOCAL`,`ID_EQU_VISITANT`),
  KEY `IDX_PTQ_ANY_JORNADA` (`PTQ_ANY`,`PTQ_JORNADA`),
  KEY `FK_PTQ_EQU_LOCAL` (`ID_EQU_LOCAL`),
  KEY `FK_PTQ_EQU_VISITANT` (`ID_EQU_VISITANT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Resultats oficials de la quiniela';

-- --------------------------------------------------------

--
-- Table structure for table `resultat`
--

DROP TABLE IF EXISTS `resultat`;
CREATE TABLE IF NOT EXISTS `resultat` (
  `Jornada` int(2) NOT NULL,
  `Temporada` year(4) NOT NULL,
  `Partit1` int(1) NOT NULL,
  `Partit2` int(1) NOT NULL,
  `Partit3` int(1) NOT NULL,
  `Partit4` int(1) NOT NULL,
  `Partit5` int(1) NOT NULL,
  `Partit6` int(1) NOT NULL,
  `Partit7` int(1) NOT NULL,
  `Partit8` int(1) NOT NULL,
  `Partit9` int(1) NOT NULL,
  `Partit10` int(1) NOT NULL,
  `Partit11` int(1) NOT NULL,
  `Partit12` int(1) NOT NULL,
  `Partit13` int(1) NOT NULL,
  `Partit14` int(1) NOT NULL,
  `Partit15` int(1) NOT NULL,
  PRIMARY KEY (`Jornada`,`Temporada`),
  KEY `FK_RESULTAT_1_idx` (`Partit1`),
  KEY `FK_RESULTAT_2_idx` (`Partit2`),
  KEY `FK_RESULTAT_3_idx` (`Partit3`),
  KEY `FK_RESULTAT_4_idx` (`Partit4`),
  KEY `FK_RESULTAT_5_idx` (`Partit5`),
  KEY `FK_RESULTAT_6_idx` (`Partit6`),
  KEY `FK_RESULTAT_7_idx` (`Partit7`),
  KEY `FK_RESULTAT_8_idx` (`Partit8`),
  KEY `FK_RESULTAT_9_idx` (`Partit9`),
  KEY `FK_RESULTAT_10_idx` (`Partit10`),
  KEY `FK_RESULTAT_11_idx` (`Partit11`),
  KEY `FK_RESULTAT_12_idx` (`Partit12`),
  KEY `FK_RESULTAT_13_idx` (`Partit13`),
  KEY `FK_RESULTAT_14_idx` (`Partit14`),
  KEY `FK_RESULTAT_15_idx` (`Partit15`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `schema_changes`
--

DROP TABLE IF EXISTS `schema_changes`;
CREATE TABLE IF NOT EXISTS `schema_changes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `MajorReleaseNumber` varchar(2) NOT NULL,
  `MinorReleaseNumber` varchar(2) NOT NULL,
  `PointReleaseNumber` varchar(4) NOT NULL,
  `scriptName` varchar(45) NOT NULL,
  `dateApplied` datetime NOT NULL,
  `changeDescription` varchar(160) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Installed versions of schema database.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `votacio`
--

DROP TABLE IF EXISTS `votacio`;
CREATE TABLE IF NOT EXISTS `votacio` (
  `id_p` int(2) NOT NULL,
  `jornada` int(2) NOT NULL,
  `temporada` year(4) NOT NULL DEFAULT '2008',
  `resultat1` int(1) NOT NULL,
  `resultat2` int(1) NOT NULL,
  `resultat3` int(1) NOT NULL,
  `resultat4` int(1) NOT NULL,
  `resultat5` int(1) NOT NULL,
  `resultat6` int(1) NOT NULL,
  `resultat7` int(1) NOT NULL,
  `resultat8` int(1) NOT NULL,
  `resultat9` int(1) NOT NULL,
  `resultat10` int(1) NOT NULL,
  `resultat11` int(1) NOT NULL,
  `resultat12` int(1) NOT NULL,
  `resultat13` int(1) NOT NULL,
  `resultat14` int(1) NOT NULL,
  `resultat15` int(1) NOT NULL,
  PRIMARY KEY (`id_p`,`jornada`,`temporada`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ptq_partit_quiniela`
--
ALTER TABLE `ptq_partit_quiniela`
  ADD CONSTRAINT `FK_PTQ_EQU_LOCAL` FOREIGN KEY (`ID_EQU_LOCAL`) REFERENCES `equ_equip` (`ID_EQU`),
  ADD CONSTRAINT `FK_PTQ_EQU_VISITANT` FOREIGN KEY (`ID_EQU_VISITANT`) REFERENCES `equ_equip` (`ID_EQU`);

--
-- Constraints for table `resultat`
--
ALTER TABLE `resultat`
  ADD CONSTRAINT `FK_RESULTAT_1` FOREIGN KEY (`Partit1`) REFERENCES `lkp_resultat` (`idlkp_resultat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTAT_10` FOREIGN KEY (`Partit10`) REFERENCES `lkp_resultat` (`idlkp_resultat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTAT_11` FOREIGN KEY (`Partit11`) REFERENCES `lkp_resultat` (`idlkp_resultat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTAT_12` FOREIGN KEY (`Partit12`) REFERENCES `lkp_resultat` (`idlkp_resultat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTAT_13` FOREIGN KEY (`Partit13`) REFERENCES `lkp_resultat` (`idlkp_resultat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTAT_14` FOREIGN KEY (`Partit14`) REFERENCES `lkp_resultat` (`idlkp_resultat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTAT_15` FOREIGN KEY (`Partit15`) REFERENCES `lkp_resultat` (`idlkp_resultat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTAT_2` FOREIGN KEY (`Partit2`) REFERENCES `lkp_resultat` (`idlkp_resultat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTAT_3` FOREIGN KEY (`Partit3`) REFERENCES `lkp_resultat` (`idlkp_resultat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTAT_4` FOREIGN KEY (`Partit4`) REFERENCES `lkp_resultat` (`idlkp_resultat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTAT_5` FOREIGN KEY (`Partit5`) REFERENCES `lkp_resultat` (`idlkp_resultat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTAT_6` FOREIGN KEY (`Partit6`) REFERENCES `lkp_resultat` (`idlkp_resultat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTAT_7` FOREIGN KEY (`Partit7`) REFERENCES `lkp_resultat` (`idlkp_resultat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTAT_8` FOREIGN KEY (`Partit8`) REFERENCES `lkp_resultat` (`idlkp_resultat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_RESULTAT_9` FOREIGN KEY (`Partit9`) REFERENCES `lkp_resultat` (`idlkp_resultat`) ON DELETE NO ACTION ON UPDATE NO ACTION;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
