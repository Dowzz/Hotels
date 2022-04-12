DROP TABLE IF EXISTS `imagegal`;
CREATE TABLE IF NOT EXISTS `imagegal` (
  `id_image` int NOT NULL AUTO_INCREMENT,
  `link` varchar(255) DEFAULT NULL,
  `suiteId` int NOT NULL,
  PRIMARY KEY (`id_image`),
  KEY `suiteId` (`suiteId`)
) ENGINE = MyISAM AUTO_INCREMENT = 14 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
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