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