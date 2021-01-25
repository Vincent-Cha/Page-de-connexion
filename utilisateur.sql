DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pwd` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateNaissance` date NOT NULL,
  `sexe` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `tel` (`tel`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
