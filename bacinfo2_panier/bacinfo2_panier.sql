-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 30 jan. 2020 à 15:44
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
-- Base de données :  `bacinfo2_panier`
--
CREATE DATABASE IF NOT EXISTS `bacinfo2_panier` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bacinfo2_panier`;

-- --------------------------------------------------------

--
-- Structure de la table `t_products`
--

DROP TABLE IF EXISTS `t_products`;
CREATE TABLE IF NOT EXISTS `t_products` (
  `id_prod` int(11) NOT NULL AUTO_INCREMENT,
  `name_prod` varchar(250) NOT NULL,
  `shortDesc_prod` text NOT NULL,
  `longDesc_prod` text NOT NULL,
  `price_prod` decimal(10,2) NOT NULL,
  `stock_prod` int(11) NOT NULL,
  PRIMARY KEY (`id_prod`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_products`
--

INSERT INTO `t_products` (`id_prod`, `name_prod`, `shortDesc_prod`, `longDesc_prod`, `price_prod`, `stock_prod`) VALUES
(1, '4 savons', '4 savons parfumés', 'Lorem Ipsum 1', '150.00', 495),
(2, '4 savons lavandes', '4 savons parfumés à la a la lavande', 'Lorem Ipsum 2', '174.99', 4896),
(3, '6 savons', '6 savons aux differents parfums', 'Lorem Ipsum 3', '249.99', 984),
(4, 'Crème gélée Royale', 'Crème pour le visage à la gelée Royale', 'Lorem Ipsum 4', '79.99', 267),
(5, 'Lotion oranger', 'Lotion tonique à la fleur d\'oranger', 'Lorem Ipsum 5', '99.99', 654),
(6, 'Porte savon', 'Porte savon aux motifs floraux', 'Lorem Ipsum 6', '24.99', 852),
(7, 'Eau de Hongrie', 'Eau de vie provenant de Hongrie', 'Lorem Ipsum 7', '999.99', 56),
(8, 'Eau de hongrie plastique', 'La même mais dans un bouteille en plastique', 'Lorem Ipsum 8', '799.99', 264),
(9, 'Savon seul', 'Beh juste un savon gros', 'Lorem Ipsum 9', '89.99', 568),
(10, 'Goeland', 'Portait d\'un goéland americano-canadien', 'Lorem Ipsum10', '26684685.25', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
