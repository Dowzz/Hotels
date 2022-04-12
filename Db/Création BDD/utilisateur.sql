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