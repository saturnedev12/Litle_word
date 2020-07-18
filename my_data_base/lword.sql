-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Sam 18 Juillet 2020 à 23:29
-- Version du serveur :  5.7.30-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lword`
--

-- --------------------------------------------------------

--
-- Structure de la table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `id_owner` int(11) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `card`
--

INSERT INTO `card` (`id`, `title`, `id_owner`, `texte`) VALUES
(1, 'la vie', 1, 'Dans la vie on ne fait pas ce que l\'on veut mais on est responsable de ce que l\'on est.'),
(2, 'l\'amour', 2, 'L\'une des plus grandes douleurs est d\'aimer une personne que tu ne peux pas avoir.'),
(4, 'le courage', 1, 'Qui ne tente rien n\'a rien , mais qui tente à une chance de gagner '),
(5, 'la vie', 1, 'Je ne peux imaginer la vie\r\nSans ta présence auprès de moi,\r\nSans la tendresse de tes paroles\r\nEt la douceur de tes doigts.\r\n\r\nJe ne peux imaginer la vie,\r\nSans ton sourire pour illuminer mes jours,\r\nSans ton amour pour réchauffer mes nuits.\r\n\r\nJe ne peux imaginer le vie sans toi,\r\nCar mon bonheur, c\'est à toi que je le dois.\r\n\r\nJe t\'aime...');

-- --------------------------------------------------------

--
-- Structure de la table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `age` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `owner`
--

INSERT INTO `owner` (`id`, `name`, `last_name`, `age`) VALUES
(1, 'Saturne', 'Wogne', 19),
(2, 'Laurette', 'Moullet', 18);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
