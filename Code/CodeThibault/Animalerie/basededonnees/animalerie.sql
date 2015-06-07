-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 20 Mai 2015 à 14:33
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `animalerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE IF NOT EXISTS `annonces` (
  `id_annonce` int(32) NOT NULL AUTO_INCREMENT,
  `email_auteur` varchar(32) NOT NULL,
  `titre_annonce` varchar(32) NOT NULL,
  `descriptif_annonce` varchar(255) NOT NULL,
  `date_annonce` date NOT NULL,
  `prix_annonce` int(32) NOT NULL,
  `type_animal` varchar(32) NOT NULL,
  `race_animal` varchar(32) NOT NULL,
  `naiss_animal` date NOT NULL,
  `sexe_animal` varchar(32) NOT NULL,
  `tatoue_animal` tinyint(1) NOT NULL,
  `puce_animal` tinyint(1) NOT NULL,
  `steril_animal` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_annonce`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `annonces`
--

INSERT INTO `annonces` (`id_annonce`, `email_auteur`, `titre_annonce`, `descriptif_annonce`, `date_annonce`, `prix_annonce`, `type_animal`, `race_animal`, `naiss_animal`, `sexe_animal`, `tatoue_animal`, `puce_animal`, `steril_animal`) VALUES
(1, 'pro@pro.fr', 'Berger allemand a vendre', 'Bonjour, nous proposons des jeunes bergers allemand issues de notre elevage.', '2015-05-11', 200, 'Chien', 'Berger Allemand', '2014-08-05', 'Male', 1, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `email_utilisateur` varchar(32) NOT NULL,
  `mdp_utilisateur` varchar(32) NOT NULL,
  `type_utilisateur` varchar(32) NOT NULL DEFAULT 'client',
  `nom_utilisateur` varchar(32) NOT NULL,
  `prenom_utilisateur` varchar(32) NOT NULL,
  PRIMARY KEY (`email_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`email_utilisateur`, `mdp_utilisateur`, `type_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`) VALUES
('admin@admin.fr', 'admin', 'admin', 'Administrateur', 'Monsieur'),
('client@client.fr', 'client', 'client', 'nomClient', 'prenomClient'),
('pro@pro.fr', 'pro', 'pro', 'nomPro', 'prenomPro');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
