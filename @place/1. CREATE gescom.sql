-- Base exemple pour le cours SQL de début. --
-- version 0.0.0 du 09/11/2015 --
-- auteur : fk
-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 08 Novembre 2015 à 16:34
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `gescom`
--
CREATE DATABASE IF NOT EXISTS `gescom` ;
USE `gescom` ;

-- --------------------------------------------------------
-- suppression des tables avant création et insertions
-- /!\ ne pas changer l'ordre des suppressions !!
-- --------------------------------------------------------
DROP TABLE IF EXISTS `contenir`;
DROP TABLE IF EXISTS `commande`;
DROP TABLE IF EXISTS `client`;
DROP TABLE IF EXISTS `article`;

-- --------------------------------------------------------
-- Structure de la table `article`
CREATE TABLE IF NOT EXISTS `article` (
  `refArt` varchar(6) NOT NULL,
  `descArt` varchar(30) NOT NULL,
  `prixHTArt` float(15,5) NOT NULL,
  `poidsArt` float(6,3) NOT NULL,
  `typeArt` enum('M','F','S','N') NOT NULL,
  PRIMARY KEY (`refArt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
-- Structure de la table `client`
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nomCli` varchar(30) NOT NULL,
  `adrCli` varchar(50) NOT NULL,
  `cpCli` int(5) NOT NULL,
  `villeCli` varchar(30) NOT NULL,
  `paysCli` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='clients' AUTO_INCREMENT=457 ;

-- --------------------------------------------------------
-- Structure de la table `commande`
CREATE TABLE IF NOT EXISTS `commande` (
  `numCde` int(8) NOT NULL AUTO_INCREMENT,
  `dateCde` date NOT NULL,
  `idClient` int(8) NOT NULL,
  PRIMARY KEY (`numCde`),
  KEY `idClient` (`idClient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='entête commandes client' AUTO_INCREMENT=361 ;

-- --------------------------------------------------------
-- Structure de la table `contenir`
CREATE TABLE IF NOT EXISTS `contenir` (
  `numCde` int(8) NOT NULL,
  `refArt` varchar(6) NOT NULL,
  `qty` float(5,2) NOT NULL,
  PRIMARY KEY (`numCde`,`refArt`),
  KEY `numCde` (`numCde`),
  KEY `refArt` (`refArt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='liste articles des commandes client';

-- Contenu de la table `article`
INSERT INTO `article` (`refArt`, `descArt`, `prixHTArt`, `poidsArt`, `typeArt`) VALUES 
('A1', 'Ancre', 45.00000, 15.000, 'F'),		
('A2', 'Manille', 2.50000, 0.030, 'F'),
('A3', 'Sextant', 1250.00000, 0.450, 'F'),
('A4', 'Bouée', 143.00000, 1.300, 'F');

-- Contenu de la table `client`
INSERT INTO `client` (`id`, `nomCli`, `adrCli`, `cpCli`, `villeCli`, `paysCli`) VALUES
(1, 'Air France', 'Par ci, par là', 75000, 'Paris', 'FRA'),
(15, 'SAI', 'Sur la Terre', 67000, 'Strasbourg', 'FRA'),
(123, 'Furecia', '15, rue de l''industrie', 67390, 'Marckolsheim', 'FRA'),
(357, 'Timken', 'Quelque part', 67000, 'Strasbourg', 'FRA'),
(456, 'Brain AG', 'HAID', 7390, 'Freiburg in Briesgau', 'GER');

-- Contenu de la table `commande`
INSERT INTO `commande` (`numCde`, `dateCde`, `idClient`) VALUES
(1, '2015-04-01', 15),
(2, '2015-04-01', 357),
(3, '2015-04-01', 15),
(4, '2015-04-02', 15);

INSERT INTO `commande` (`numCde`, `dateCde`, `idClient`) VALUES
(357, '2015-01-01', 123),
(358, '2015-01-02', 456),
(359, '2015-01-02', 456),
(360, '2015-01-03', 123);

-- Contenu de la table `contenir`
INSERT INTO `contenir` (`numCde`, `refArt`, `qty`) VALUES
(1, 'A1', 5.00),
(1, 'A2', 30.00),
(2, 'A2', 25.00),
(3, 'A1', 4.00),
(3, 'A3', 1.00),
(4, 'A1', 2.00);
INSERT INTO `contenir` (`numCde`, `refArt`, `qty`) VALUES
(357, 'A1', 1.00),
(357, 'A2', 1.00),
(357, 'A3', 1.00),
(357, 'A4', 1.00),
(358, 'A1', 2.00),
(358, 'A2', 2.00),
(358, 'A3', 2.00),
(359, 'A1', 3.00),
(359, 'A2', 3.00),
(360, 'A1', 4.00);

--
-- --------------------------------------------------------
-- Contraintes pour les tables exportées
-- Contraintes pour la table `commande`
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

-- Contraintes pour la table `contenir`
ALTER TABLE `contenir`
  ADD CONSTRAINT `contenir_ibfk_2` FOREIGN KEY (`refArt`) REFERENCES `article` (`refArt`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `contenir_ibfk_1` FOREIGN KEY (`numCde`) REFERENCES `commande` (`numCde`) ON DELETE NO ACTION ON UPDATE NO ACTION;


