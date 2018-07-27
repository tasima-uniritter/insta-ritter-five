USE `dbinstafive`;

DROP TABLE IF EXISTS `Image`;

CREATE TABLE `Image` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Description` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
);

INSERT INTO `Image` (`ID`, `Description`, `URL`)
VALUES
  (1,'Primeira Foto','xxx.jpg'),
  (2,'Segunda Foto','yyy.jpg'),
  (3,'Terceira Foto','www.jpg');








