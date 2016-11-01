-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 19 Octobre 2016 à 10:37
-- Version du serveur :  5.7.15-0ubuntu0.16.04.1
-- Version de PHP :  7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `siteCV`
--

-- --------------------------------------------------------

--
-- Structure de la table `Admistration`
--

CREATE TABLE `Admistration` (
  `id` int(11) NOT NULL,
  `nom_du_site` varchar(255) NOT NULL,
  `lien_du_site` text NOT NULL,
  `url_logo` text NOT NULL,
  `url_screen` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='récupère les informations du pannel d''administration';

--
-- Contenu de la table `Admistration`
--

INSERT INTO `Admistration` (`id`, `nom_du_site`, `lien_du_site`, `url_logo`, `url_screen`, `description`) VALUES
(1, 'Filtres et Transformations CSS', 'https://anna-ap.github.io/ProjetSimplon/filtreTransform/index.html', 'user.jpg', 'filtretransform.png', 'Premier projet de groupe au cours de ma formation à Simplon.co, l\'objectif était d\'apprendre des fonctionnalités CSS précises et de le restituer à l\'ensemble de la promotion dans un site web tutoriel et un atelier applicatif.'),
(2, 'L\'intendance de Silanie', 'http://intendance.unitshare.fr/', 'user.jpg', 'intendance.png', 'Dans le cadre d\'un jeu , j\'ai décidé d\'apporter une application web permettant aux joueurs de calculer avec facilité le commerce de leur personnage sur une application permettant le calcul du rapport investissement/bénéfice.\r\n\r\nCe site est entièrement réalisé avec html5, css3, javascript et php.'),
(3, 'Code Académie', 'http://localhost/wordpress-promo/', 'user.jpg', 'rennes.png', 'Lors d\'un échange inter-promotion à Rennes, j\'ai participé à la création du site de la promo dans le cadre d\'un challenge de 3 jours.'),
(4, 'Anna - Développeuse Web', 'http://annadeveloppeuse.unitshare.fr/', 'user.jpg', 'Anna.png', 'Dans le cadre de ma formation, j\'ai été amené à réaliser un projet personnel de mon choix. J\'ai choisi de réaliser ce site afin de promouvoir ma recherche d\'emploi et mes différents travaux.');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Admistration`
--
ALTER TABLE `Admistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Admistration`
--
ALTER TABLE `Admistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
