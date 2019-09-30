-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 30 sep. 2019 à 13:01
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
-- Base de données :  `achat`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_produits`
--

DROP TABLE IF EXISTS `t_produits`;
CREATE TABLE IF NOT EXISTS `t_produits` (
  `id_prod` int(11) NOT NULL AUTO_INCREMENT,
  `nom_prod` varchar(250) NOT NULL,
  `pu_prod` decimal(10,2) NOT NULL,
  `descriptif_prod` text NOT NULL,
  `photo_prod` text NOT NULL,
  PRIMARY KEY (`id_prod`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_produits`
--

INSERT INTO `t_produits` (`id_prod`, `nom_prod`, `pu_prod`, `descriptif_prod`, `photo_prod`) VALUES
(1, '4 savons', '150.00', '4 savons parfumés', 'm_4S2069_1.jpg'),
(2, '4 savons lavandes', '179.99', '4 savons parfumés à la a la lavande', 'm_4S2078_1.jpg'),
(3, '6 savons', '249.99', '6 savons aux differents parfums', 'm_6S2140_1.jpg'),
(4, 'Crème gélée Royale', '79.99', 'Crème pour le visage à la gelée Royale', 'm_C1050_1.jpg'),
(5, 'lotion oranger', '99.99', 'Lotion tonique à la fleur d\'oranger', 'm_C1255_1.jpg'),
(6, 'porte savon', '24.99', 'Porte savon aux motifs floraux', 'm_DADPSF_1.jpg'),
(7, 'Eau de Hongrie', '999.99', 'Eau de vie provenant de Hongrie', 'm_H8203_1.jpg'),
(8, 'EAu de hongrie plastique', '799.99', 'La même mais dans un bouteille en plastique', 'm_HG253_1.jpg'),
(9, 'Savon seul', '89.99', 'Beh juste un savon gros', 'm_S5140MV2_1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
