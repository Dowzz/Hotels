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