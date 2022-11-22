-- Adminer 4.8.1 MySQL 5.5.5-10.6.7-MariaDB-2ubuntu1.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `Articles`;
CREATE TABLE `Articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(300) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `Date_ajout` datetime DEFAULT NULL,
  `id_Catégories` int(11) DEFAULT NULL,
  `picture` longtext DEFAULT NULL,
  `prix` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_Catégories` (`id_Catégories`),
  CONSTRAINT `Articles_ibfk_1` FOREIGN KEY (`id_Catégories`) REFERENCES `Catégories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Articles` (`id`, `Title`, `Description`, `Date_ajout`, `id_Catégories`, `picture`, `prix`) VALUES
(1,	'DELL OPTIPLEX 3020 SFF - WINDOWS 10   ÉCRAN 22',	'Intel i5-4570 3.20 GHz / 8Go RAM DDR3 / 500Go HDD / Gigabit Ethernet / Windows 10 64 bits avec licence officielle Microsoft MAR',	'2022-11-22 00:00:00',	1,	'https://www.tradediscount.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/d/e/dell-3020-sff-i5-8go-500go-hdd-w10-ecran22.jpg',	'219.89'),
(4,	'Apple MacBook Air 13,3',	'Ecran : 13,4',	'2022-11-22 00:00:00',	1,	'https://e-leclerc.scene7.com/is/image/gtinternet/0194252056073_1?op_sharpen=1',	'1299'),
(7,	'Smartphone Apple iPhone 14 Bleu 128Go 5G',	'Ecran : large 6,1',	'2022-11-22 00:00:00',	2,	'https://boulanger.scene7.com/is/image/Boulanger/0194253409571_h_f_l_0?wid=500&hei=500',	'1019.90'),
(8,	'Logiciel de bureautique Microsoft 365 Personnel',	'Version : boite - Compatibilité : PC Licence : Pour 1 an - Administratif Nombre dutilisateur : 1',	'2022-11-22 00:00:00',	4,	'https://boulanger.scene7.com/is/image/Boulanger/0889842863000_h_f_l_0?wid=500&hei=500',	'69'),
(29,	'Mad Catz RAT 8  Noir - Souris gamer filaire personnalisable - 11 boutons - LED RGB - 16000 DPI - Pixart PMW3389',	'Mad Catz RAT 8  Noir - Souris gamer filaire personnalisable - 11 boutons - LED RGB - 16000 DPI - Pixart PMW3389',	'2022-11-22 00:00:00',	3,	'https://m.media-amazon.com/images/I/71GPJ0AcZkL._AC_SX679_.jpg',	'79.99'),
(30,	'Dell Xps 13 9315 Intel Core i5-1230U Ordinateur Portable 13.4\"',	'Dell Xps 13 9315 Intel Core i5-1230U Ordinateur Portable 13.4\" Full HD+ Sky 16 Go de RAM SSD 512 Go Intel ADL-P P28 UMA Iris Windows 11 Home Plus Clavier AZERTY Français rétroéclairé',	'2022-11-22 00:00:00',	1,	'https://m.media-amazon.com/images/I/71QQ5bYAEZL._AC_SX679_.jpg',	'999.00');

DROP TABLE IF EXISTS `Catégories`;
CREATE TABLE `Catégories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Catégories` (`id`, `Title`, `Description`) VALUES
(1,	'Ordinateurs',	'blabla'),
(2,	'Téléphones',	NULL),
(3,	'Accessoires Ordinateurs',	'\"Souries clavier ...\"'),
(4,	'Licences',	'Windows 10,Office etc...');

DROP TABLE IF EXISTS `Commandes`;
CREATE TABLE `Commandes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_Users` int(11) DEFAULT NULL,
  `date_commande` datetime DEFAULT NULL,
  `Num_commande` int(11) DEFAULT NULL,
  `id_Articles` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_Users` (`id_Users`),
  KEY `id_Articles` (`id_Articles`),
  CONSTRAINT `Commandes_ibfk_1` FOREIGN KEY (`id_Users`) REFERENCES `Users` (`id`),
  CONSTRAINT `Commandes_ibfk_2` FOREIGN KEY (`id_Articles`) REFERENCES `Articles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `Users`;
CREATE TABLE `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat` varchar(20) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Mail` varchar(100) DEFAULT NULL,
  `Login` varchar(100) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Date_Creation` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Users` (`id`, `cat`, `Nom`, `Prenom`, `Mail`, `Login`, `Password`, `Date_Creation`) VALUES
(1,	'root',	'Sroussi',	'Nathan',	'Nathansroussi@gmail.com',	'Nat.5_',	'test55@',	'2012-08-22 00:00:00'),
(2,	'user',	'Test',	'Test',	'test@gmail.com',	'test_5',	'test55@',	NULL);

-- 2022-11-22 14:00:48
