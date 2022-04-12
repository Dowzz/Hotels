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