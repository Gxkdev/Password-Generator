-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 28 mars 2023 à 10:03
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet4`
--

-- --------------------------------------------------------

--
-- Structure de la table `passwords`
--

DROP TABLE IF EXISTS `passwords`;
CREATE TABLE IF NOT EXISTS `passwords` (
  `id` int NOT NULL AUTO_INCREMENT,
  `password` varchar(240) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `passwords`
--

INSERT INTO `passwords` (`id`, `password`) VALUES
(1, 'yhgmokcv'),
(2, '}S)s]Ll4)yq*Q7o*VV;z'),
(3, 'TNXI73Yxq2UxLml'),
(4, 'zbievuti'),
(5, 'fhjdikwa'),
(6, '3REGNpZK'),
(7, 'KQP_w)X1HEQLE$ie<O9'),
(8, 'kchvwggx'),
(9, 'kofxwjkt'),
(10, 'evmfegcs'),
(11, 'jrzehhwk'),
(12, 'zmTzo8j1o-wLY|3I$y?r');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
