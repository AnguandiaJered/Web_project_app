-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 24 Février 2021 à 14:19
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sos_mama`
--

-- --------------------------------------------------------

--
-- Structure de la table `listefonction1`
--

CREATE TABLE `listefonction1` (
  `id` int(11) NOT NULL,
  `liste` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `listefonction1`
--

INSERT INTO `listefonction1` (`id`, `liste`) VALUES
(1, '1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua.'),
(8, '4 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua.'),
(5, '2 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua.'),
(7, '3 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod         tempor incididunt ut labore et dolore magna aliqua.');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `listefonction1`
--
ALTER TABLE `listefonction1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `listefonction1`
--
ALTER TABLE `listefonction1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
