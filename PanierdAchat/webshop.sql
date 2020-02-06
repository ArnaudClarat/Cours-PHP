-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 05 dec. 2019 à 22:37
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
-- Base de données :  `webshop`
--

DELIMITER ;


--
-- Structure de la table `t_carts`
--

DROP TABLE IF EXISTS `t_carts`;
CREATE TABLE IF NOT EXISTS `t_carts` (
                                         `CartID` int(15) NOT NULL AUTO_INCREMENT,
                                         `CartCusID` int(15) NOT NULL,
                                         `CartDateUpdate` datetime NOT NULL,
                                         `CartDateCreate` datetime NOT NULL,
                                         `CartValidate` tinyint(1) NOT NULL,
                                         PRIMARY KEY (`CartID`),
                                         FOREIGN KEY (`CartCusID`) REFERENCES t_customers(CusID)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Structure de la table `t_customers`
--

DROP TABLE IF EXISTS  `t_customers`;
CREATE TABLE IF NOT EXISTS `t_customers` (
                                         `CusID` int(15) NOT NULL AUTO_INCREMENT,
                                         `CusLastName` varchar(50) COLLATE NOT NULL,
                                         `CusFirstName` varchar(50) COLLATE NOT NULL,
                                         PRIMARY KEY (`CusID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Structure de la table `t_products`
--

DROP TABLE IF EXISTS `t_products`;
CREATE TABLE IF NOT EXISTS `t_products` (
                                        `ProdID` int(15) NOT NULL AUTO_INCREMENT,
                                        `ProdName` varchar(50) COLLATE NOT NULL,
                                        `ProdPU` decimal(6,2) COLLATE NOT NULL,
                                        `ProdDesc` varchar(50) COLLATE NOT NULL,
                                        `ProdImage` varchar(50) COLLATE NOT NULL,
                                        `ProdStock` int(5) UNSIGNED COLLATE NOT NULL,
                                        PRIMARY KEY (`ProdID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Structure de la table `t_orders`
--

DROP TABLE IF EXISTS `t_orders`;
CREATE TABLE IF NOT EXISTS `t_orders` (
                                        `OrdID` int(15) NOT NULL AUTO_INCREMENT,
                                        `OrdCusID` int(15) UNSIGNED NOT NULL,
                                        `OrdCartID` int(15) UNSIGNED NOT NULL,
                                        `OrdDateCreate` datetime NOT NULL,
                                        `OrdDateUpdate` datetime,
                                        PRIMARY KEY (`OrdID`),
                                        FOREIGN KEY (`OrdCusID`) REFERENCES t_customers(`CusID`),
                                        FOREIGN KEY (`OrdCartID`) REFERENCES t_carts(`CartID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

-- TODO Créer une table intermédiaire entre t_products et t_carts