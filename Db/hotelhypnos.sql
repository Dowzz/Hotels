-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 04 avr. 2022 à 10:24
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotelhypnos`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contactId` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`contactId`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`contactId`, `email`, `message`, `date`) VALUES
(30, 'malekk29@gmail.com', 'test de la chat box\n', '2022-04-04 10:16:41'),
(29, 'candidat@test.fr', 'yolo', '2022-04-04 09:34:57');

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

DROP TABLE IF EXISTS `etablissement`;
CREATE TABLE IF NOT EXISTS `etablissement` (
  `etabId` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `userId` int NOT NULL,
  PRIMARY KEY (`etabId`),
  UNIQUE KEY `userId` (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=163 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etablissement`
--

INSERT INTO `etablissement` (`etabId`, `nom`, `ville`, `adresse`, `description`, `userId`) VALUES
(155, 'aaaa', 'aaaa', 'aaaa', 'aaaa', 22),
(160, 'Le relais du chateau', 'Chalon', '15 rue de l\'eglise', 'Un joli petit hotel situé près d\'une rivière a 5 km du centre ville', 26),
(162, 'joli etablissement', 'lolo', 'lolo', 'lolo', 25),
(161, 'joli etablissement', 'lolo', 'lolo', 'lolo', 23),
(9, 'La maison Bleue', 'Paris', '15 rue des lilas', 'Joli petit hotel parisien', 16);

-- --------------------------------------------------------

--
-- Structure de la table `imagegal`
--

DROP TABLE IF EXISTS `imagegal`;
CREATE TABLE IF NOT EXISTS `imagegal` (
  `id_image` int NOT NULL AUTO_INCREMENT,
  `link` varchar(255) DEFAULT NULL,
  `suiteId` int NOT NULL,
  PRIMARY KEY (`id_image`),
  KEY `suiteId` (`suiteId`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `imagegal`
--

INSERT INTO `imagegal` (`id_image`, `link`, `suiteId`) VALUES
(1, 'https://pix8.agoda.net/hotelImages/114207/-1/c3647f113011c925cf65a712df976f99.jpg?ca=7&ce=1&s=1024x768', 35),
(2, 'https://q-xx.bstatic.com/xdata/images/hotel/max500/237469365.jpg?k=0fe4c8da2e9a17faab1793789ac850fc7bc9f4aa47bd019095b7a3bdd97c1d50&o=', 35),
(3, 'https://q-xx.bstatic.com/xdata/images/hotel/max500/237465211.jpg?k=9bdc05fedb90d6de38bbc9758c5d23b8980599bba0c857e5d16bfb8d1f70bd87&o=', 35),
(4, 'https://q-xx.bstatic.com/xdata/images/hotel/max500/237465373.jpg?k=e97e10a975e6ebe9171e60820d3010454c58ee2f20ffe8fa986d408534d0debc&o=', 35),
(5, 'https://q-xx.bstatic.com/xdata/images/hotel/max500/237465918.jpg?k=cae060045478983edb134fdef34bcb91159b604e4c9b1268bcab360d47db4cdb&o=', 35),
(6, 'https://pix8.agoda.net/hotelImages/114207/-1/26c6ba5999fc11b09bbc8f7325109032.jpg?ca=7&ce=1&s=1024x768', 35),
(7, 'https://pix8.agoda.net/hotelImages/617202/-1/a17a18f71a344ecd6664972e7d8463e9.jpg?ca=9&ce=1&s=1024x768', 35),
(8, 'https://pix8.agoda.net/hotelImages/617202/-1/ff00f15df8c6d1b559ebf7a97b7aba14.jpg?ca=13&ce=1&s=1024x768', 45),
(9, 'https://media.istockphoto.com/photos/entering-hotel-room-picture-id512882668?k=20&m=512882668&s=612x612&w=0&h=Ykm_LB72Ke0WnMyv6h_r6Z8LG3W3xEhgzmNbg-hK-qE=', 39);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `resId` int NOT NULL AUTO_INCREMENT,
  `suiteId` int NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `etabId` int NOT NULL,
  `userId` int NOT NULL,
  PRIMARY KEY (`resId`),
  KEY `suiteId` (`suiteId`),
  KEY `etabId` (`etabId`),
  KEY `userId` (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`resId`, `suiteId`, `startdate`, `enddate`, `etabId`, `userId`) VALUES
(55, 45, '2022-03-28', '2022-03-31', 160, 53);

-- --------------------------------------------------------

--
-- Structure de la table `suite`
--

DROP TABLE IF EXISTS `suite`;
CREATE TABLE IF NOT EXISTS `suite` (
  `suiteId` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `descriptif` varchar(255) NOT NULL,
  `prix` decimal(15,2) NOT NULL,
  `booking` varchar(100) DEFAULT NULL,
  `etabId` int NOT NULL,
  PRIMARY KEY (`suiteId`),
  KEY `etabId` (`etabId`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `suite`
--

INSERT INTO `suite` (`suiteId`, `titre`, `image`, `descriptif`, `prix`, `booking`, `etabId`) VALUES
(35, 'Hotel parisien', 'https://st.depositphotos.com/2288675/2454/i/600/depositphotos_24543787-stock-photo-hotel.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur obcaecati eos in, sequi quam quod nobis possimus hic vel, iste harum soluta praesentium repudiandae officia ex. Inventore facilis id minus!', '115.00', 'il est super beau', 160),
(39, 'test', 'https://hotel-international-paris.com/_novaimg/4484743-1388337_0_289_2200_1199_2200_1200.rc.jpg', 'test', '250.00', '123', 160),
(44, 'test', 'https://www.cadranhotel.com/_novaimg/4639319-1427884_337_0_4306_3131_2200_1600.rc.jpg', 'test', '225.00', 'test', 160);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `userId` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`userId`, `name`, `prenom`, `email`, `password`, `role`) VALUES
(1, 'barny', 'michel', 'admin@test.com', '$2y$10$glxMSqjhs0wJfuohPlqcVO9F.4EASau9UCWz0r3BWRC.21fMfU1FK', 'admin'),
(25, 'pp', 'pp', 'pp@pp.com', '$2y$10$AxiuIX3DqRH0B.2moHKdMuDEDIys1VLmKIlbmT.iaEOR0MHR51cHK', 'gérant'),
(24, 'oo', 'oo', 'oo@oo.com', '$2y$10$zPpVpboD1Coh8VlPhyLf0On7YOaGvJ0Be.2UnZ2k01potC/Wl7JXa', 'client'),
(23, 'ii', 'ii', 'ii@ii.com', '$2y$10$UKJ690A5EBrbONC7vf4si.3DH6pa3eeZW4D2CehwY2DC5vFlR20SW', 'gérant'),
(22, 'uu', 'uu', 'uu@uu.com', '$2y$10$Qu98Gdj/DW12XUgMcDpiK.5HllhgIGhDRwYFqxWqwgD1C6n3wJfQ2', 'gérant'),
(31, 'yy', 'yy', 'yy@yy.com', '$2y$10$bM2qjllB4Mi/uHC0zGcSguJzgIR0BwS6Pxi.u.kIMhhP5AOK7eWNO', 'client'),
(20, 'zz', 'z', 'zz@zz.com', '$2y$10$TSvTjmQVFATZcIPfyQOhGOsFeVRWZ6AWefIM6bEk/LIxujU0bC0NC', 'client'),
(16, 'aa', 'aa', 'aa@aa.com', '$2y$10$rQLOihVwSYNfCesZY00kr.5fn5WeWDxnMhcCZehIjnk8emjgw1yFi', 'client'),
(26, 'Gérant', 'Jean luc', 'gerant@test.com', '$2y$10$wKFMoIZLpdnwEo8KwOZOsu6xZHfQnxa8eZE0zmCLWGiSBpktFjska', 'gérant'),
(28, 'aaa', 'aaa', 'aaa@aaa.com', '$2y$10$bcKNV75zrzQkC0E8q9ac7ufuU9YYMmhnpIkDOA6tQ/u7fqVZ6As5y', 'gérant'),
(29, 'aaaaa', 'aaaaaa', 'aaaaa@aaaa.com', '$2y$10$wBbMPy67jBqwx09mjG4Mwe3TVYtuH4IlW15YnR96sSDvDsobxWlom', 'gérant'),
(44, 'll', 'll', 'll@ll.com', '$2y$10$I267oTgKC5qhh0xFH4TYUeqGiEaI88PxG9pqIHY82Msf9jRa5mdu.', 'client'),
(32, 'ee', 'ee', 'ee@ee.com', '$2y$10$LOFgmj7Qkn.XLaXPMfsPJ.NSEtM6JWez3.zKO1EhbjbvcEVKow.5W', 'gérant'),
(33, 'uu', 'uu', 'uu@uu.com', '$2y$10$N0/RYTChhluyGhdYWiO08ehWsAoqI.8VJPIrSTtDWVXYgbV3LQXWe', 'client'),
(43, 'll', 'll', 'll@ll.com', '$2y$10$x88.FCU.yzzJDylWlzwEieQphrnZ/M.WOA2/xvNIkdZs0E/cKyyRe', 'gérant'),
(35, 'ww', 'ww', 'ww@ww.com', '$2y$10$eTWXEJIeydiIbcJ7I9AZ/eg0Luktr7uCpOveLVZAcWsSTeudwWvlu', 'client'),
(53, 'client', 'client', 'client@test.com', '$2y$10$/AibYsYLbdbcQ8zdir9At.b1TLwRg7Ym0x.dpp28Naoh0qXFO5sr.', 'client');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;