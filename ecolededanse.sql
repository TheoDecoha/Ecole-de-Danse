-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 24 Novembre 2013 à 14:56
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ecolededanse`
--
CREATE DATABASE IF NOT EXISTS `ecolededanse` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ecolededanse`;

-- --------------------------------------------------------

--
-- Structure de la table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chemin` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `thumbail` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `albums`
--

INSERT INTO `albums` (`id`, `chemin`, `description`, `thumbail`) VALUES
(1, 'albums/albumtest/', 'Un album de test', 'IMG_0051.JPG'),
(2, 'albums/albumtest2/', 'un autre album de test', 'IMG_0050.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(5) NOT NULL AUTO_INCREMENT,
  `titre` varchar(32) NOT NULL,
  `article` varchar(2048) NOT NULL,
  `date_article` date NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `article`, `date_article`) VALUES
(1, 'Article 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id faucibus massa. Aenean id nibh mi. Sed aliquet nibh leo, gravida lobortis arcu faucibus non. Donec vel interdum neque. Sed quis mauris velit. Sed rutrum congue elit, in condimentum mi rho', '2013-11-24'),
(2, 'Article 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id faucibus massa. Aenean id nibh mi. Sed aliquet nibh leo, gravida lobortis arcu faucibus non. Donec vel interdum neque. Sed quis mauris velit. Sed rutrum congue elit, in condimentum mi rhoncus eget. In vel mi dictum, suscipit tellus ut, sollicitudin nibh. Fusce pretium risus ut turpis vestibulum dapibus. Sed arcu mi, consequat quis nulla vitae, mollis aliquam justo. Donec fringilla ligula est, a fringilla ante tempus non. Aenean et enim id ipsum sodales gravida et vel lectus. Curabitur placerat leo sit amet dolor vehicula porta. Pellentesque rhoncus ornare nunc, in facilisis lacus ornare eget. Pellentesque hendrerit, tellus ut volutpat blandit, arcu leo sodales augue, vel auctor lacus odio sed nibh. Proin ut nibh sit amet lacus sagittis dictum.', '2013-11-24');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE IF NOT EXISTS `cours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`id`, `type`) VALUES
(1, 'Contemporain'),
(2, 'Modern Jazz');

-- --------------------------------------------------------

--
-- Structure de la table `enfants`
--

CREATE TABLE IF NOT EXISTS `enfants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `enfants`
--

INSERT INTO `enfants` (`id`, `nom`, `prenom`, `parent_id`) VALUES
(1, 'Dupont', 'Jean', 1);

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE IF NOT EXISTS `equipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `statut` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`id`, `nom`, `prenom`, `statut`) VALUES
(1, 'Dupont', 'Jean', 'Président'),
(2, 'Dupond', 'Gérard', 'Vice-président');

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

CREATE TABLE IF NOT EXISTS `participer` (
  `cours_id` int(11) NOT NULL,
  `enfant_id` int(11) NOT NULL,
  PRIMARY KEY (`cours_id`),
  KEY `cours_id` (`cours_id`),
  KEY `enfant_id` (`enfant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

CREATE TABLE IF NOT EXISTS `responsable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cp` int(5) NOT NULL,
  `telephone` int(10) unsigned zerofill NOT NULL,
  `tel_portable` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `responsable`
--

INSERT INTO `responsable` (`id`, `email`, `nom`, `prenom`, `mdp`, `adresse`, `ville`, `cp`, `telephone`, `tel_portable`) VALUES
(1, 'test@gmail.com', 'Dupont', 'Gérard', '098f6bcd4621d373cade4e832627b4f6', 'La petite pidoucière', 'Corzé', 49140, 0241323046, 0664054633);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `enfants`
--
ALTER TABLE `enfants`
  ADD CONSTRAINT `enfants_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `responsable` (`id`);

--
-- Contraintes pour la table `participer`
--
ALTER TABLE `participer`
  ADD CONSTRAINT `participer_ibfk_2` FOREIGN KEY (`enfant_id`) REFERENCES `enfants` (`id`),
  ADD CONSTRAINT `participer_ibfk_3` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
