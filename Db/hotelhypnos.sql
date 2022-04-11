-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 11 avr. 2022 à 11:23
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
  time_zone = "+00:00";
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
  ) ENGINE = MyISAM AUTO_INCREMENT = 31 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
--
  -- Déchargement des données de la table `contact`
  --
INSERT INTO
  `contact` (`contactId`, `email`, `message`, `date`)
VALUES
  (
    30,
    'malekk29@gmail.com',
    'test de la chat box\n',
    '2022-04-04 10:16:41'
  ),
  (
    29,
    'candidat@test.fr',
    'yolo',
    '2022-04-04 09:34:57'
  );
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
  ) ENGINE = MyISAM AUTO_INCREMENT = 171 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
--
  -- Déchargement des données de la table `etablissement`
  --
INSERT INTO
  `etablissement` (
    `etabId`,
    `nom`,
    `ville`,
    `adresse`,
    `description`,
    `userId`
  )
VALUES
  (
    160,
    'Le relais du chateau',
    'Chalon',
    '15 rue de l\'eglise',
    'Un joli petit hotel situé près d\'une rivière a 5 km du centre ville',
    26
  ),
  (
    170,
    'La tour du pin',
    'Marseille',
    '25 impasse du bourg',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aspernatur molestias cum, optio totam doloremque nobis quisquam quam assumenda expedita magnam, veritatis sint asperiores itaque dignissimos eos quis. Vitae, minus.',
    54
  ),
  (
    169,
    'La maison de papier',
    'Paris',
    '17 route de la paix',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aspernatur molestias cum, optio totam doloremque nobis quisquam quam assumenda expedita magnam, veritatis sint asperiores itaque dignissimos eos quis. Vitae, minus.',
    58
  ),
  (
    167,
    'l\'Hotel de ville',
    'Nantes',
    '45 rue de la mairie',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quia perspiciatis temporibus saepe eum corporis sed facere tempore in. Cumque mollitia labore quaerat corporis libero neque officia fugit in error.',
    56
  ),
  (
    168,
    'La maison de papier',
    'Caen',
    '12 avenue du 6 juin',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aspernatur molestias cum, optio totam doloremque nobis quisquam quam assumenda expedita magnam, veritatis sint asperiores itaque dignissimos eos quis. Vitae, minus.',
    59
  );
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
  ) ENGINE = MyISAM AUTO_INCREMENT = 14 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
--
  -- Déchargement des données de la table `imagegal`
  --
INSERT INTO
  `imagegal` (`id_image`, `link`, `suiteId`)
VALUES
  (
    1,
    'https://www.hotel-diana-dauphine.com/media/cache/jadro_resize/rc/PHWZk38w1625734188/jadroRoot/medias/5658345e8f976/chambre-1.jpg',
    59
  ),
  (
    2,
    'https://www.hotel-diana-dauphine.com/media/cache/jadro_resize/rc/PHWZk38w1625734188/jadroRoot/medias/5658345e8f976/chambre-1.jpg',
    59
  ),
  (
    3,
    'https://www.hotel-diana-dauphine.com/media/cache/jadro_resize/rc/PHWZk38w1625734188/jadroRoot/medias/5658345e8f976/chambre-1.jpg',
    59
  ),
  (
    4,
    'https://webzine.okeenea.com/wp-content/uploads/2018/07/chambre-h%C3%B4tel-PMR-obligations-normes-loi-accessibilit%C3%A9.jpg',
    59
  ),
  (
    5,
    'https://webzine.okeenea.com/wp-content/uploads/2018/07/chambre-h%C3%B4tel-PMR-obligations-normes-loi-accessibilit%C3%A9.jpg',
    60
  ),
  (
    6,
    'https://www.hotel-diana-dauphine.com/media/cache/jadro_resize/rc/PHWZk38w1625734188/jadroRoot/medias/5658345e8f976/chambre-1.jpg',
    60
  ),
  (
    7,
    'https://www.hotel-diana-dauphine.com/media/cache/jadro_resize/rc/PHWZk38w1625734188/jadroRoot/medias/5658345e8f976/chambre-1.jpg',
    61
  ),
  (
    8,
    'https://www.beaujoire-hotel.com/usermedia/photo-636250158080377143-1.jpg?dummy=0&h=800',
    61
  ),
  (
    9,
    'https://www.beaujoire-hotel.com/usermedia/photo-636250158080377143-1.jpg?dummy=0&h=800',
    60
  ),
  (
    10,
    'https://www.beaujoire-hotel.com/usermedia/photo-636250158080377143-1.jpg?dummy=0&h=800',
    59
  ),
  (
    11,
    'https://www.beaujoire-hotel.com/usermedia/photo-636250158080377143-1.jpg?dummy=0&h=800',
    61
  ),
  (12, '', 61),
  (
    13,
    'https://webzine.okeenea.com/wp-content/uploads/2018/07/chambre-h%C3%B4tel-PMR-obligations-normes-loi-accessibilit%C3%A9.jpg',
    60
  );
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
  ) ENGINE = MyISAM AUTO_INCREMENT = 56 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
--
  -- Déchargement des données de la table `reservation`
  --
INSERT INTO
  `reservation` (
    `resId`,
    `suiteId`,
    `startdate`,
    `enddate`,
    `etabId`,
    `userId`
  )
VALUES
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
    `prix` decimal(15, 2) NOT NULL,
    `booking` varchar(100) DEFAULT NULL,
    `etabId` int NOT NULL,
    PRIMARY KEY (`suiteId`),
    KEY `etabId` (`etabId`)
  ) ENGINE = MyISAM AUTO_INCREMENT = 62 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
--
  -- Déchargement des données de la table `suite`
  --
INSERT INTO
  `suite` (
    `suiteId`,
    `titre`,
    `image`,
    `descriptif`,
    `prix`,
    `booking`,
    `etabId`
  )
VALUES
  (
    59,
    'Suite parentale',
    'https://www.deco.fr/sites/default/files/styles/full_1200x630/public/migration-images/101525.jpg?itok=xm0oumy4',
    'Une jolie suite parentale avec deux lits doubles',
    '25.00',
    'Book',
    160
  ),
  (
    60,
    'Suite parentale',
    'https://www.deco.fr/sites/default/files/styles/full_1200x630/public/migration-images/101525.jpg?itok=xm0oumy4',
    'Une jolie suite parentale avec deux lits doubles',
    '25.00',
    'Book',
    160
  ),
  (
    61,
    'Suite parentale',
    'https://www.deco.fr/sites/default/files/styles/full_1200x630/public/migration-images/101525.jpg?itok=xm0oumy4',
    'Une jolie suite parentale avec deux lits doubles',
    '25.00',
    'Book',
    160
  );
-- --------------------------------------------------------
  --
  -- Structure de la table `utilisateur`
  --
  DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
    `userId` int NOT NULL AUTO_INCREMENT,
    `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
    `prenom` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `password` varchar(255) NOT NULL,
    `role` varchar(50) NOT NULL,
    PRIMARY KEY (`userId`)
  ) ENGINE = MyISAM AUTO_INCREMENT = 61 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
--
  -- Déchargement des données de la table `utilisateur`
  --
INSERT INTO
  `utilisateur` (
    `userId`,
    `name`,
    `prenom`,
    `email`,
    `password`,
    `role`
  )
VALUES
  (
    1,
    'barny',
    'michel',
    'admin@test.com',
    '$2y$10$glxMSqjhs0wJfuohPlqcVO9F.4EASau9UCWz0r3BWRC.21fMfU1FK',
    'admin'
  ),
  (
    60,
    'test7',
    'test7',
    'test7@test.com',
    '$2y$10$rFWArCqOL6FbGK7w6eqiKOWUc9/fWRJXwZjHl2/oYbUcBpgVzx4xW',
    'client'
  ),
  (
    59,
    'test6',
    'test6',
    'test6@test.com',
    '$2y$10$V2jyj6Ml5Bba2bSCBGNS8.SADrd4nZ3ctRzth4sCYuRUlMFaba4pK',
    'gérant'
  ),
  (
    26,
    'Gérant',
    'Jean luc',
    'gerant@test.com',
    '$2y$10$wKFMoIZLpdnwEo8KwOZOsu6xZHfQnxa8eZE0zmCLWGiSBpktFjska',
    'gérant'
  ),
  (
    58,
    'test5',
    'test5',
    'test5@test.com',
    '$2y$10$Pu1PyGVLSw.ZZht1URXvfOuCkOpnu9/JXpNeTthg8q5Np.EwqMNSS',
    'gérant'
  ),
  (
    57,
    'test4',
    'test4',
    'test4@test.com',
    '$2y$10$.9diNYHc.YLTHDeZRUMvOOeltMT84hhH.Naum9dACmQ8HJsm1qwqK',
    'client'
  ),
  (
    56,
    'test3',
    'test3',
    'test3@test.com',
    '$2y$10$IdCT/7IHRWfb6Kgt7TCEt.Tyefc7.rrTxQ3.9Gr5L8Py.ZlLCh8za',
    'gérant'
  ),
  (
    55,
    'test2',
    'test2',
    'test2@test.com',
    '$2y$10$KQB9c028IMSy0g97bB.kX.wnaN0azTRlatm.pR8a4Q2k7BT7NPJn6',
    'client'
  ),
  (
    54,
    'test1',
    'test1',
    'test@test.com',
    '$2y$10$xywMkYQwGimR3B2inhopleilWXL4NslDL2CTsHORSGE/qHUztjoIO',
    'gérant'
  ),
  (
    53,
    'client',
    'client',
    'client@test.com',
    '$2y$10$/AibYsYLbdbcQ8zdir9At.b1TLwRg7Ym0x.dpp28Naoh0qXFO5sr.',
    'client'
  );
COMMIT;
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;