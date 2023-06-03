-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 04 sep. 2022 à 19:59
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `larawork`
--

-- --------------------------------------------------------

--
-- Structure de la table `home`
--

CREATE TABLE `home` (
  `id` int(11) DEFAULT NULL,
  `mission` mediumtext NOT NULL,
  `value` mediumtext NOT NULL,
  `consulting` mediumtext NOT NULL,
  `support` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `home`
--

INSERT INTO `home` (`id`, `mission`, `value`, `consulting`, `support`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ratione cupiditate veritatis deserunt! Iste, Accusamus ratione cupiditate veritatis deserunt! Iste,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ratione cupiditate veritatis deserunt! Accusamus ratione cupiditate veritatis deserunt! Iste,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ratione cupiditate veritatis Accusamus ratione cupiditate veritatis deserunt! Iste,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ratione cupiditate veritatis des Accusamus ratione cupiditate veritatis deserunt!,fri');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
