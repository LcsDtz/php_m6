-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 11 août 2021 à 20:31
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `php_m6`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUtilisateur` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `nom`, `pseudo`, `password`, `mail`) VALUES
(1, 'Lucas Dentz', 'Lcs', '5f4dcc3b5aa765d61d8327deb882cf99', 'test@gmail.com'),
(2, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@test.fr'),
(3, 'toto', 'tutu', 'bdb8c008fa551ba75f8481963f2201da', 'toto@toto.fr'),
(4, 'tarte', 'tarte', '75c7d6bd641049bbc0d5f35070162cfb', 'tarte@lo.fr'),
(5, 'aiai', 'aiai', '5aef618b0bfdba62d10cac13582a413f', 'aiai@aiai.fr'),
(6, 'nunu', 'nunu', '2f8c3ab806a42e79c774cb09b41a53c8', 'nunu@nunu.fr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
