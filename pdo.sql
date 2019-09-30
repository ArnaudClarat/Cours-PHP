-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 30 sep. 2019 à 13:02
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pdo`
--

DELIMITER $$
--
-- Procédures
--
DROP PROCEDURE IF EXISTS `test`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `test` (INOUT `Name` VARCHAR(25))  NO SQL
BEGIN
SET Name = 'Coucou';
SELECT Name;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `signals`
--

DROP TABLE IF EXISTS `signals`;
CREATE TABLE IF NOT EXISTS `signals` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `Forename` varchar(15) COLLATE latin1_bin NOT NULL,
  `Name` varchar(15) COLLATE latin1_bin NOT NULL,
  `Sex` varchar(1) COLLATE latin1_bin NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Déchargement des données de la table `signals`
--

INSERT INTO `signals` (`id`, `Forename`, `Name`, `Sex`, `Phone_Number`) VALUES
(1, 'Clarat', 'Arnaud', 'M', 123456789);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
