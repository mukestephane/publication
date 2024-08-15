-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 19 sep. 2020 à 05:58
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_publication`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_complet` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `valider` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom_complet`, `password`, `valider`) VALUES
(6, 'Muke Stephane', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(9, 'Kambale Emmanuel', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 0),
(10, 'Mazembe regine', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 1),
(11, 'Nelly kanyoma', 'c984aed014aec7623a54f0591da07a85fd4b762d', 0),
(12, 'Alvine Muke', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(14, 'Musafiri', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `ref_trav` int(11) NOT NULL,
  `date_comment` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `nom`, `email`, `comments`, `ref_trav`, `date_comment`) VALUES
(1, 'Alvine', 'alvine@gmail.com', ' La gratuitÃ© de l\'enseignement - passÃ©, prÃ©sent, avenir, Rapport du MinistÃ¨re FranÃ§ais de l\'Education Nationale, 1er trimestre, 2002.', 18, '2020-04-09 13:52:26'),
(2, 'Mike Mutoro', 'mike@gmail.com', 'TrÃ¨s bien Ã©laborer je vous fÃ©licite vraiment', 18, '2020-04-09 14:29:39'),
(3, 'Grevise Mafuta', 'mafuta@gmail.com', 'je aimÃ© ton travail mon frÃ¨re en tout cas fÃ©licitation', 18, '2020-04-09 14:35:21'),
(4, 'Stephane', 'stephane@gmail.com', 'Mon mpangi tu as trÃ¨s bien rÃ©dige votre travail j\'aime Ã§a', 31, '2020-04-10 23:28:53'),
(5, 'Omega Alpha', 'alphaomenga@gmail.com', 'En ce qui concerne les ressources humaines, les deux indicateurs que lâ€™on retrouve le plus souvent dans les Ã©tudes sont le support Ã©lÃ¨ve', 21, '2020-04-11 00:08:20'),
(6, 'Stephane', 'stephane@gmail.com', 'Un travail impeccable tu mÃ©rite Ãªtre retenue comme assistant en informatique de gestion mon pot ', 29, '2020-04-14 12:57:39'),
(7, 'alvine ', 'alvine@gmail.com', 'modification du wampserver3.2.0', 44, '2020-07-28 09:10:39');

-- --------------------------------------------------------

--
-- Structure de la table `travaux`
--

DROP TABLE IF EXISTS `travaux`;
CREATE TABLE IF NOT EXISTS `travaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `edition` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `options` varchar(255) NOT NULL,
  `auditoire` varchar(255) NOT NULL,
  `contenue` varchar(255) NOT NULL,
  `valided` int(11) NOT NULL,
  `date_publie` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `travaux`
--

INSERT INTO `travaux` (`id`, `name`, `lastname`, `title`, `edition`, `sexe`, `options`, `auditoire`, `contenue`, `valided`, `date_publie`) VALUES
(19, 'Mazembe', 'Boyekombo', 'Gestion de payement des agents dans un hÃ´pital', '2018-2019', 'FÃ©minin', 'IG', 'G3', '16785.htm', 0, '2020-04-16 21:13:43'),
(20, 'Djesse', 'Pamodima', 'Gestion de stock de machandise dans un magasin', '2019-2020', 'Masculin', 'IG', 'L2', '7232.htm', 1, '2020-04-14 10:52:57'),
(21, 'Ebongo', 'Leta', 'Gestion d\'enregistrement des nouveaux nÃ©s dans un Etat civil', '2019-2020', 'Masculin', 'IG', 'L2', '6601.htm', 0, '2020-08-14 10:58:40'),
(22, 'Abedi', 'Mutalimbu GÃ©orges', 'ProblÃ¨me de Jean-pierre Mbemba Ngombo Ã  la CPI', '2019-2020', 'Masculin', 'GÃ©ographie', 'L2', '18678.htm', 0, '2020-04-04 12:39:38'),
(23, 'Musungayi', 'Meta', 'Gestion des malades dans un hÃ´pital privÃ©', '2018-2019', 'FÃ©minin', 'IG', 'G3', '13559.htm', 0, '2020-04-04 12:41:53'),
(24, 'Muke', 'Gerardine', 'Gestion d\'enregistrement des plaquets d\'immatriculation', '2018-2019', 'Masculin', 'Math-physique', 'G3', '1439.htm', 0, '2020-04-04 13:14:31'),
(25, 'Lisungi', 'Ngutu GÃ©orges', 'Calcul de dosages de motiers dans un projet de construction', '2022-2023', 'Masculin', 'ACA', 'G3', '1772.htm', 0, '2020-04-14 10:51:06'),
(26, 'Christient', 'Zapane', 'Composition de la musique moderne de la RÃ©publique dÃ©mocratique du Congo', '2020-2021', 'FÃ©minin', 'FranÃ§ais', 'G3', '2741.htm', 0, '2020-08-09 01:59:24'),
(29, 'Muke', 'Alvine', 'Gestion de publication des travaux scientifiques', '2019-2020', 'Masculin', 'IG', 'L2', '32612.htm', 1, '2020-04-04 15:08:42'),
(31, 'kumbukumbu', 'bienvenue', 'Gestion de suivi des malades dans un hÃ´pital cas de COKIS', '2018-2019', 'Masculin', 'IG', 'G3', '9071.htm', 1, '2020-04-14 11:47:44'),
(32, 'muke', 'ekwa', 'Gestion d\'enregistrement des sidaiennes dans un hÃ´pital', '2014-2015', 'Masculin', 'Biologie-chimie', 'G3', '6268.htm', 0, '2020-04-10 21:30:40'),
(33, 'Lune', 'Limiere', 'Gestion de payement des locataires dans un quartier de la ville de Tshopo', '2017-2018', 'FÃ©minin', 'GÃ©ographie', 'L2', '7499.htm', 0, '2020-04-10 21:44:20'),
(34, 'Muke', 'Jemima', 'Gestion de micropost publiÃ© par les intenauts de la ville de kisangani', '2004-2005', 'FÃ©minin', 'FranÃ§ais', 'G3', '25861.htm', 1, '2020-04-14 12:18:26'),
(35, 'Kambale', 'Kitamuliko', 'Gestion de vente des produits cosmetiques dans un magasin', '2017-2018', 'Masculin', 'IG', 'G3', '1931.htm', 0, '2020-08-09 01:56:47'),
(36, 'Bokuwa', 'kaki', 'Gestion des archivages des documents dans une bibliotheque visuelle', '2014-2015', 'Masculin', 'IG', 'G3', '28537.htm', 1, '2020-04-14 10:42:25'),
(37, 'Musafiri', 'Mayaza', 'Gestion de distribuction des plaquets d\'immatriculation dans une entreprise cas de DGI', '2001-2002', 'FÃ©minin', 'Histoire', 'G3', '1327.htm', 0, '2020-04-13 01:23:25'),
(38, 'puludisu', 'lang', 'Gestion de publication des rÃ©sultats des Ã©lÃ¨ves dans une Ã©cole conventionnÃ©e catholique', '2019-2020', 'Masculin', 'Science commerciales', 'L2', '27216.htm', 1, '2020-04-16 21:25:12'),
(42, 'Kingombe', 'Selemani', 'Gestion de vente des produits cosmÃ©tiques', '2019-2020', 'Masculin', 'IG', 'G3', '21612.htm', 0, '2020-04-18 11:28:46'),
(44, 'Muke', 'Kalonda', 'Gestion de publication et archivage des travaux scientifiques', '2019-2021', 'Masculin', 'IG', 'L2', '1289148192.htm', 1, '2020-07-28 09:07:26'),
(45, 'Musafiri', 'Germain', 'Discours de la dÃ©fense en informatique ', '2019-2021', 'Masculin', 'IG', 'L2', '320495170.htm', 1, '2020-07-28 09:17:05'),
(46, 'ebidjey', 'djesse', 'systeme de gestion de base de donnÃ©es', '2012-2015', 'Masculin', 'IG', 'G3', '1733901402.htm', 1, '2020-07-30 12:51:21'),
(48, 'Kingombe', 'Selemani Freddy', 'Gestion de vente des produits cosmÃ©tiques dans un magasin', '2019-2020', 'Masculin', 'IG', 'G3', '2079453458.htm', 1, '2020-08-02 16:58:33'),
(49, 'Mazembe', 'Boyekombo', 'Gestion de logistique du centre hospitalier', '2018-2019', 'FÃ©minin', 'FranÃ§ais', 'L2', '1059346127.htm', 0, '2020-08-13 11:52:09'),
(51, 'Amani', 'Aline', 'DÃ©sorientation des Ã©lÃ¨ves dans le cycle d\'orientation', '2025-2026', 'FÃ©minin', 'FranÃ§ais', 'G3', '1549762361.htm', 1, '2020-08-10 17:52:34'),
(52, 'Sumaili', 'Misenga John', 'Gestion des stocks Ã  les invateurs continue avec alerte des messages', '2019-2020', 'Masculin', 'IG', 'L2', '1386578975.htm', 1, '2020-08-14 13:10:25'),
(53, 'Alivin', 'stephane', 'implÃ©mentation d\'une application client-serveur pour la gestion de publication de travaux scientifiques', '2019-2020', 'Masculin', 'IG', 'L2', '776495315.htm', 1, '2020-08-22 11:19:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
