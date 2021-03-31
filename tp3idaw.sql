-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Genere le : lun. 29 mars 2021 a 08:35
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de donnees : `tp3idaw`
--

-- --------------------------------------------------------

--
-- Structure de la table `aliment`
--

DROP TABLE IF EXISTS `aliment`;
CREATE TABLE IF NOT EXISTS `aliment` (
  `id_aliment` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_aliment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dechargement des donnees de la table `aliment`
--

INSERT INTO `aliment` (`id_aliment`, `nom`, `type`) VALUES
(1, 'Dessert (aliment moyen)', 'Dessert'),
(2, 'Salade de thon et legumes, appertisee', 'entrees et plats composes'),
(3, 'Salade composee avec viande ou poisson, appertisee', 'entrees et plats composes'),
(4, 'Champignons a la grecque, appertises', 'entrees et plats composes'),
(5, 'Salade de pommes de terre, fait maison', 'entrees et plats composes'),
(6, 'Taboule ou Salade de couscous, preemballe', 'entrees et plats composes'),
(7, 'Salade de pomme de terre a la piemontaise, preemballee', 'entrees et plats composes'),
(8, 'Salade de riz, appertisee', 'entrees et plats composes'),
(9, 'Salade de pates, vegetarienne', 'entrees et plats composes'),
(10, 'Crudite, sans assaisonnement (aliment moyen)', 'entrees et plats composes'),
(11, 'Salade de pates aux legumes, avec poisson ou viande, preemballee', 'entrees et plats composes'),
(12, 'Macedoine de legumes en salade, avec sauce, preemballee', 'entrees et plats composes'),
(13, 'Salade Cesar au poulet (salade verte, fromage, croutons, sauce), preemballee', 'entrees et plats composes'),
(14, 'Salade vegetale a base de boulgour et/ou quinoa et legumes, preemballee', 'entrees et plats composes'),
(15, 'Carottes rapees, avec sauce, preemballees', 'entrees et plats composes'),
(16, 'Salade de betterave, avec sauce, preemballee', 'entrees et plats composes'),
(17, 'Salade de chou ou Coleslaw, avec sauce, preemballee', 'entrees et plats composes'),
(18, 'Salade de concombre a la creme/fromage blanc, preemballee', 'entrees et plats composes'),
(19, 'Salade de lentilles et saucisse fumee, preemballee', 'entrees et plats composes'),
(20, 'Salade grecque, avec sauce, preemballee', 'entrees et plats composes'),
(21, 'Salade de riz a la nicoise, avec sauce, preemballee', 'entrees et plats composes'),
(22, 'Taboule ou Salade de couscous au poulet, preemballe', 'entrees et plats composes'),
(23, 'Soupe aux lentilles, preemballee a rechauffer', 'entrees et plats composes'),
(24, 'Soupe a la volaille et aux legumes, preemballee a rechauffer', 'entrees et plats composes'),
(25, 'Soupe aux legumes varies, preemballee a rechauffer', 'entrees et plats composes'),
(26, 'Soupe de poissons et / ou crustaces, preemballee a rechauffer', 'entrees et plats composes'),
(27, 'Soupe aux legumes varies, deshydratee reconstituee', 'entrees et plats composes'),
(28, 'Soupe aux poireaux et pommes de terre, preemballee a rechauffer', 'entrees et plats composes'),
(29, 'Soupe a la volaille et aux vermicelles, preemballee a rechauffer', 'entrees et plats composes'),
(30, 'Bouillon de viande et legumes type pot-au-feu, pret a consommer', 'entrees et plats composes'),
(31, 'Soupe a l\'oignon, preemballee a rechauffer', 'entrees et plats composes'),
(32, 'Soupe aux champignons, preemballee a rechauffer', 'entrees et plats composes'),
(33, 'Soupe a la carotte, preemballee a rechauffer', 'entrees et plats composes'),
(34, 'Soupe a la tomate, preemballee a rechauffer', 'entrees et plats composes'),
(35, 'Soupe chorba frik, a base de viande et de frik', 'entrees et plats composes'),
(36, 'Soupe minestrone, preemballee a rechauffer', 'entrees et plats composes'),
(37, 'Soupe au pistou, deshydratee reconstituee', 'entrees et plats composes'),
(38, 'Soupe de poissons et / ou crustaces, deshydratee reconstituee', 'entrees et plats composes'),
(39, 'Soupe asiatique, avec pates, deshydratee reconstituee', 'entrees et plats composes'),
(40, 'Soupe marocaine, deshydratee reconstituee', 'entrees et plats composes'),
(41, 'Soupe aux poireaux et pommes de terre, deshydratee reconstituee', 'entrees et plats composes'),
(42, 'Soupe a la volaille et aux legumes, deshydratee reconstituee', 'entrees et plats composes'),
(43, 'Bouillon de boeuf, deshydrate reconstitue', 'entrees et plats composes'),
(44, 'Soupe aux asperges, deshydratee reconstituee', 'entrees et plats composes'),
(45, 'Soupe a la tomate et aux vermicelles, preemballee a rechauffer', 'entrees et plats composes'),
(46, 'Soupe aux cereales et aux legumes, deshydratee reconstituee', 'entrees et plats composes'),
(47, 'Soupe a la tomate, deshydratee reconstituee', 'entrees et plats composes'),
(48, 'Soupe aux champignons, deshydratee reconstituee', 'entrees et plats composes'),
(49, 'Soupe a l\'oignon, deshydratee reconstituee', 'entrees et plats composes'),
(50, 'Soupe au potiron, preemballee a rechauffer', 'entrees et plats composes'),
(51, 'Bouillon de volaille, deshydrate reconstitue', 'entrees et plats composes'),
(52, 'Bouillon de legumes, deshydrate reconstitue', 'entrees et plats composes'),
(53, 'Soupe a la tomate et aux vermicelles, deshydratee reconstituee', 'entrees et plats composes'),
(54, 'Soupe a la volaille et aux vermicelles, deshydratee reconstituee', 'entrees et plats composes'),
(55, 'Soupe au pistou, preemballee a rechauffer', 'entrees et plats composes'),
(56, 'Soupe au potiron, deshydratee reconstituee', 'entrees et plats composes'),
(57, 'Soupe asiatique, avec pates, preemballee a rechauffer', 'entrees et plats composes'),
(58, 'Soupe minestrone, deshydratee reconstituee', 'entrees et plats composes'),
(59, 'Soupe au cresson, deshydratee reconstituee', 'entrees et plats composes'),
(60, 'Soupe au cresson, preemballee a rechauffer', 'entrees et plats composes'),
(61, 'Soupe aux legumes avec fromage, preemballee a rechauffer', 'entrees et plats composes'),
(62, 'Soupe aux legumes verts, preemballee a rechauffer', 'entrees et plats composes'),
(63, 'Soupe aux legumes verts, deshydratee reconstituee', 'entrees et plats composes'),
(64, 'Soupe aux pois casses, preemballee a rechauffer', 'entrees et plats composes'),
(65, 'Soupe froide type Gaspacho ou Gazpacho, preemballee', 'entrees et plats composes'),
(66, 'Soupe aux asperges, preemballee a rechauffer', 'entrees et plats composes'),
(67, 'Soupe (aliment moyen)', 'entrees et plats composes'),
(68, 'Soupe miso, deshydratee reconstituee', 'entrees et plats composes'),
(69, 'Tripes a la mode de Caen', 'entrees et plats composes'),
(70, 'Tripes a la mode de Caen, preemballees', 'entrees et plats composes'),
(71, 'Tripes a la tomate ou a la provencale', 'entrees et plats composes'),
(72, 'Blanquette de veau', 'entrees et plats composes'),
(73, 'Boeuf bourguignon', 'entrees et plats composes'),
(74, 'Saute d\'agneau au curry, preemballe', 'entrees et plats composes'),
(75, 'Canard en sauce (poivre vert, chasseur, etc.), preemballe', 'entrees et plats composes'),
(76, 'Lapin a la moutarde, preemballe', 'entrees et plats composes'),
(77, 'Coq au vin', 'entrees et plats composes'),
(78, 'Paupiette de veau', 'entrees et plats composes'),
(79, 'Paupiette de volaille', 'entrees et plats composes'),
(80, 'Viande en sauce (aliment moyen)', 'entrees et plats composes'),
(81, 'Poulet au curry et au lait de coco', 'entrees et plats composes'),
(82, 'Meloukhia, plat a base de boeuf et corete, fait maison', 'entrees et plats composes'),
(83, 'Palette a la diable, preemballee', 'entrees et plats composes'),
(84, 'Langue de boeuf sauce madere, preemballee', 'entrees et plats composes'),
(85, 'Porc au caramel, preemballe', 'entrees et plats composes'),
(86, 'Boulettes au boeuf, a la sauce tomate, preemballees', 'entrees et plats composes'),
(87, 'Paupiette de veau, preemballee,  cuite au four', 'entrees et plats composes'),
(88, 'Carpaccio de boeuf, avec marinade', 'entrees et plats composes'),
(89, 'Yakitori (brochettes japonaises grillees en sauce)', 'entrees et plats composes'),
(90, 'Brochette de boeuf, cuite', 'entrees et plats composes'),
(91, 'Brochette de volaille, cuite', 'entrees et plats composes'),
(92, 'Hachis parmentier a la viande, preemballe', 'entrees et plats composes'),
(93, 'Couscous au mouton', 'entrees et plats composes'),
(94, 'Couscous a la viande ou au poulet, preemballe, allege', 'entrees et plats composes'),
(95, 'Poelee de pommes de terre prefrites, lardons ou poulet, et autres, sans legumes verts, preemballee', 'entrees et plats composes'),
(96, 'Couscous royal (avec plusieurs viandes), preemballe', 'entrees et plats composes'),
(97, 'Couscous au poulet', 'entrees et plats composes'),
(98, 'Couscous a la viande, preemballe', 'entrees et plats composes');

-- --------------------------------------------------------

--
-- Structure de la table `apport`
--

DROP TABLE IF EXISTS `apport`;
CREATE TABLE IF NOT EXISTS `apport` (
  `id_aliment` int(11) NOT NULL,
  `glucides` float NOT NULL,
  `proteines` float NOT NULL,
  `lipides` float NOT NULL,
  `sel` float NOT NULL,
  `calories` float NOT NULL,
  PRIMARY KEY (`id_aliment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dechargement des donnees de la table `apport`
--

INSERT INTO `apport` (`id_aliment`, `glucides`, `proteines`, `lipides`, `sel`, `calories`) VALUES
(1, 4.61, 36.6, 12.9, 0.38, 50.2),
(2, 9.15, 7.74, 4.7, 1.11, 50),
(3, 8.06, 6.4, 5.3, 0.95, 50),
(4, 2.08, 3.95, 3.55, 1.26, 50),
(5, 2.68, 9.9, 8.2, 1.32, 50),
(6, 4.88, 23.7, 6.7, 1, 179),
(7, 4.5, 8.87, 8.3, 1.08, 130),
(8, 5.13, 16.1, 4.35, 1.1, 50),
(9, 5.7, 13.7, 8.1, 1.04, 50),
(10, 0.94, 3.07, 0.7, 0.031, 29.9),
(11, 5.19, 14, 9.94, 0.95, 50),
(12, 2.81, 7, 9.3, 1.04, 50),
(13, 8.13, 4.88, 10, 0.75, 50),
(14, 4.06, 17.4, 8.3, 0.77, 168),
(15, 0.98, 6.01, 5, 0.67, 50),
(16, 1.29, 7.45, 4.94, 0.7, 50),
(17, 0.94, 5.78, 8.1, 0.88, 105),
(18, 1.1, 1.97, 11.3, 1.07, 50),
(19, 7, 8.9, 11.8, 0.89, 50),
(20, 2, 1.4, 7.1, 1.04, 50),
(21, 4.45, 15.8, 6.08, 0.76, 50),
(22, 6.4, 20.6, 7.45, 1.05, 50),
(23, 3.74, 6.6, 1.12, 0.36, 55),
(24, 3.09, 2.6, 0.8, 1.75, 30.8),
(25, 0.76, 5.05, 1.56, 0.69, 39.4),
(26, 3.45, 2.88, 1.79, 0.86, 42.8),
(27, 0.86, 4.43, 1.22, 0.69, 34.5),
(28, 0.79, 4.46, 1.51, 0.73, 37.1),
(29, 1.3, 3.86, 1, 0.82, 30.8),
(30, 0.2, 0.1, 0.4, 1.08, 4.8),
(31, 1.35, 4.93, 1.4, 0.79, 40.4),
(32, 0.81, 4.09, 3.07, 0.78, 48.2),
(33, 0.61, 3.89, 1.41, 0.65, 33.2),
(34, 0.74, 6.27, 0.99, 0.64, 38.7),
(35, 3.75, 5.4, 2.5, 0.84, 62.9),
(36, 1.2, 5.6, 2, 0.75, 48.8),
(37, 1.2, 5.2, 0.35, 0.64, 30.4),
(38, 0.91, 5.09, 0.5, 0.63, 29),
(39, 0.97, 5.25, 0.44, 0.84, 29.8),
(40, 1.2, 5.77, 0.55, 0.8, 34.3),
(41, 0.63, 4.84, 0.41, 0.72, 26.1),
(42, 0.99, 4.58, 0.44, 0.73, 27.3),
(43, 0.6, 1.33, 0.15, 0.74, 9.05),
(44, 0.6, 5.14, 1.31, 0.76, 35.3),
(45, 1.1, 5.87, 0.8, 0.77, 37.7),
(46, 1.4, 6.8, 1.4, 0.78, 47.8),
(47, 0.76, 5.79, 0.97, 0.69, 36.2),
(48, 0.65, 4.37, 1.79, 0.79, 37.8),
(49, 0.58, 4.37, 0.4, 0.79, 24),
(50, 0.67, 4.13, 1.56, 0.65, 35.9),
(51, 0.6, 0.5, 0.13, 0.78, 5.58),
(52, 0.34, 0.65, 0.16, 0.61, 5.38),
(53, 0.63, 4.21, 0.18, 0.68, 21.6),
(54, 0.75, 3.87, 0.25, 0.68, 21.3),
(55, 2, 4.1, 0.5, 0.65, 31.9),
(56, 0.79, 5.61, 1.24, 0.7, 38.3),
(57, 0.7, 3.4, 0.5, 0.9, 22.3),
(58, 1.14, 5.53, 0.34, 0.7, 31.3),
(59, 0.42, 3.95, 0.8, 0.77, 25.1),
(60, 1, 5.4, 0.8, 0.78, 34),
(61, 1.34, 5.09, 2.51, 0.67, 50.2),
(62, 1, 3.84, 1.32, 0.7, 33.4),
(63, 0.72, 5.31, 1.07, 0.66, 34.8),
(64, 2.68, 6.25, 1.98, 0.7, 56.7),
(65, 0.65, 3.38, 1.62, 0.75, 32.8),
(66, 4.6, 4.7, 10.4, 0.98, 133),
(67, 1.27, 4.5, 1.37, 0.75, 37.4),
(68, 1.38, 2.18, 0.5, 1.1, 17.1),
(69, 20.4, 0.3, 3.68, 1.06, 116),
(70, 18.4, 0.7, 3.62, 1.03, 112),
(71, 15.7, 0.6, 3.2, 1.23, 94.1),
(72, 15.4, 3.1, 4, 0.74, 113),
(73, 8.93, 4.17, 3.3, 0.88, 84.6),
(74, 10.5, 10.2, 13.9, 1.29, 50),
(75, 9.55, 10.2, 7.3, 1.29, 145),
(76, 14.9, 0.5, 5, 1.2, 108),
(77, 13, 4, 7, 1.05, 133),
(78, 14.5, 2.6, 13.8, 1.26, 193),
(79, 23.9, 8.8, 3.4, 1.05, 164),
(80, 11.3, 3.65, 4.6, 0.85, 104),
(81, 10.6, 3.15, 6.9, 1.07, 124),
(82, 10.6, 1.2, 14.7, 0.93, 189),
(83, 13.5, 2.08, 6.07, 2.25, 120),
(84, 9.5, 4.5, 13.5, 1.08, 180),
(85, 10, 11.4, 5.4, 1.34, 136),
(86, 9, 5.5, 6.5, 1.01, 117),
(87, 22, 0.48, 20.5, 1.07, 276),
(88, 15.2, 0.55, 23, 1.12, 271),
(89, 26, 9.3, 3.3, 1.19, 172),
(90, 21.9, 0.33, 5.2, 0.86, 139),
(91, 23.1, 1.39, 4, 0.75, 137),
(92, 5.99, 9.39, 8.22, 0.83, 138),
(93, 8.31, 12.2, 7.2, 0.81, 149),
(94, 5.9, 11.5, 1.9, 0.7, 90.7),
(95, 3.2, 16.2, 9.6, 0.6, 168),
(96, 7.69, 14, 4.53, 0.88, 132),
(97, 7.5, 15.6, 3.85, 0.79, 130),
(98, 7.59, 12.5, 4.73, 0.78, 128);

-- --------------------------------------------------------

--
-- Structure de la table `compose`
--

DROP TABLE IF EXISTS `compose`;
CREATE TABLE IF NOT EXISTS `compose` (
  `id_aliment` int(11) NOT NULL,
  `id_aliment_compose` int(11) NOT NULL,
  `proportion` smallint(6) NOT NULL,
  PRIMARY KEY (`id_aliment`,`id_aliment_compose`),
  KEY `compose_Aliment0_FK` (`id_aliment_compose`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `journal`
--

DROP TABLE IF EXISTS `journal`;
CREATE TABLE IF NOT EXISTS `journal` (
  `ind` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `Login` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`ind`),
  KEY `Journal_Utilisateur_FK` (`Login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dechargement des donnees de la table `journal`
--

INSERT INTO `journal` (`ind`, `date`, `Login`) VALUES
(1, '2021-03-22', 'anna.pasquier@etu.imt-lille-douai.fr'),
(2, '2021-03-22', 'jiaqi.gao@etu.imt-lille-douai.fr'),
(3, '2021-03-22', 'nassim.bouaziz@etu.imt-lille-douai.fr'),
(4, '2021-03-22', 'eloi.guisnet@etu.imt-lille-douai.fr'),
(5, '2021-03-22', 'radia.el.hamdouni@etu.imt-lille-douai.fr'),
(6, '2021-03-22', 'fatima.maslouhi@etu.imt-lille-douai.fr'),
(7, '2021-03-22', 'pauline.pichon@etu.imt-lille-douai.fr'),
(8, '2021-03-22', 'issam.kassel@etu.imt-lille-douai.fr'),
(9, '2021-03-22', 'sam.khosrowshahi@etu.imt-lille-douai.fr'),
(10, '2021-03-22', 'xuechu.wang@etu.imt-lille-douai.fr'),
(11, '2021-03-22', 'sam.khosrowshahi@etu.imt-lille-douai.fr'),
(12, '2021-03-22', 'zhiwei.pei@etu.imt-lille-douai.fr'),
(13, '2021-03-22', 'thomas.vinchon@etu.imt-lille-douai.fr'),
(14, '2021-03-22', 'clement.mercier@etu.imt-lille-douai.fr'),
(15, '2021-03-22', 'thomas.coydon@etu.imt-lille-douai.fr'),
(16, '2021-03-22', 'xiao.wang@etu.imt-lille-douai.fr'),
(17, '2021-03-22', 'nassim.bouaziz@etu.imt-lille-douai.fr'),
(18, '2021-03-22', 'fatima.maslouhi@etu.imt-lille-douai.fr'),
(19, '2021-03-22', 'mehdi.moulay.berkchi@etu.imt-lille-douai.fr'),
(20, '2021-03-22', 'pauline.pichon@etu.imt-lille-douai.fr');

-- --------------------------------------------------------

--
-- Structure de la table `manger`
--

DROP TABLE IF EXISTS `manger`;
CREATE TABLE IF NOT EXISTS `manger` (
  `ind` int(11) NOT NULL,
  `id_aliment` int(11) NOT NULL,
  `quantite` smallint(6) NOT NULL,
  PRIMARY KEY (`ind`,`id_aliment`) USING BTREE,
  KEY `manger_Aliment0_FK` (`id_aliment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dechargement des donnees de la table `manger`
--

INSERT INTO `manger` (`ind`, `id_aliment`, `quantite`) VALUES
(1, 79, 100),
(2, 30, 124),
(3, 97, 500),
(4, 39, 28),
(5, 59, 209),
(6, 71, 59),
(7, 82, 234),
(8, 90, 423),
(9, 58, 208),
(10, 89, 666),
(11, 75, 342),
(12, 13, 52),
(13, 66, 420),
(14, 15, 56),
(15, 72, 45),
(16, 92, 69),
(17, 93, 345),
(18, 72, 123),
(19, 85, 156),
(20, 67, 432);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Login` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Age` tinyint(4) NOT NULL,
  `Sport` tinyint(4) NOT NULL,
  `Sexe` tinyint(1) NOT NULL,
  `Taille` int(11) NOT NULL,
  `Poids` float NOT NULL,
  PRIMARY KEY (`Login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dechargement des donnees de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Login`, `Age`, `Sport`, `Sexe`, `Taille`, `Poids`) VALUES
('anna.pasquier@etu.imt-lille-douai.fr', 21, 2, 1, 182, 66),
('antoine.goron@etu.imt-lille-douai.fr', 21, 8, 0, 170, 59),
('arnaud.rushenas@etu.imt-lille-douai.fr', 21, 1, 0, 185, 50),
('bilal.el.mahdaoui@etu.imt-lille-douai.fr', 21, 2, 0, 169, 56),
('clement.mercier@etu.imt-lille-douai.fr', 21, 6, 0, 193, 100),
('eloi.guisnet@etu.imt-lille-douai.fr', 21, 3, 0, 187, 83),
('fan.fei@etu.imt-lille-douai.fr', 21, 7, 0, 189, 77),
('fatima.maslouhi@etu.imt-lille-douai.fr', 21, 6, 1, 165, 89),
('hao.ji@etu.imt-lille-douai.fr', 21, 5, 0, 164, 62),
('hugo.resseguier@etu.imt-lille-douai.fr', 21, 8, 0, 166, 85),
('issam.kassel@etu.imt-lille-douai.fr', 21, 8, 1, 177, 67),
('jiaqi.gao@etu.imt-lille-douai.fr', 21, 1, 0, 190, 55),
('lucas.faby@etu.imt-lille-douai.fr', 21, 2, 0, 186, 87),
('maya.didon@etu.imt-lille-douai.fr', 21, 5, 1, 190, 56),
('mehdi.lamatig@etu.imt-lille-douai.fr', 21, 3, 0, 190, 84),
('mehdi.moulay.berkchi@etu.imt-lille-douai.fr', 21, 3, 0, 169, 76),
('nassim.bouaziz@etu.imt-lille-douai.fr', 21, 0, 0, 181, 74),
('pauline.pichon@etu.imt-lille-douai.fr', 21, 7, 1, 178, 66),
('pierre.marque@etu.imt-lille-douai.fr', 21, 6, 0, 189, 71),
('radia.el.hamdouni@etu.imt-lille-douai.fr', 21, 4, 1, 163, 80),
('salah.nourelayne@etu.imt-lille-douai.fr', 21, 4, 0, 160, 58),
('sam.khosrowshahi@etu.imt-lille-douai.fr', 21, 2, 0, 165, 85),
('thomas.coydon@etu.imt-lille-douai.fr', 21, 7, 0, 177, 53),
('thomas.vinchon@etu.imt-lille-douai.fr', 21, 3, 0, 185, 65),
('xiao.wang@etu.imt-lille-douai.fr', 21, 5, 0, 174, 60),
('xuechu.wang@etu.imt-lille-douai.fr', 21, 8, 0, 178, 89),
('yoann.bordin@etu.imt-lille-douai.fr', 21, 5, 0, 188, 72),
('zhiwei.pei@etu.imt-lille-douai.fr', 21, 3, 0, 160, 80),
('zouheir.touil@etu.imt-lille-douai.fr', 21, 7, 0, 170, 66);

--
-- Contraintes pour les tables dechargees
--

--
-- Contraintes pour la table `apport`
--
ALTER TABLE `apport`
  ADD CONSTRAINT `Apport_FK` FOREIGN KEY (`id_aliment`) REFERENCES `aliment` (`id_aliment`)ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `compose`
--
ALTER TABLE `compose`
  ADD CONSTRAINT `compose_Aliment0_FK` FOREIGN KEY (`id_aliment_compose`) REFERENCES `aliment` (`id_aliment`)ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compose_Aliment_FK` FOREIGN KEY (`id_aliment`) REFERENCES `aliment` (`id_aliment`)ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `journal`
--
ALTER TABLE `journal`
  ADD CONSTRAINT `Journal_Utilisateur_FK` FOREIGN KEY (`Login`) REFERENCES `utilisateur` (`Login`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `manger`
--
ALTER TABLE `manger`
  ADD CONSTRAINT `manger_Aliment0_FK` FOREIGN KEY (`id_aliment`) REFERENCES `aliment` (`id_aliment`)ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manger_Journal_FK` FOREIGN KEY (`ind`) REFERENCES `journal` (`ind`)ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
