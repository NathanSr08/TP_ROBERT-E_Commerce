-- Adminer 4.8.1 MySQL 5.5.5-10.5.15-MariaDB-0+deb11u1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `Articles`;
CREATE TABLE `Articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `Date_ajout` datetime DEFAULT NULL,
  `id_Catégories` int(11) DEFAULT NULL,
  `picture` longtext DEFAULT NULL,
  `prix` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_Catégories` (`id_Catégories`),
  CONSTRAINT `Articles_ibfk_1` FOREIGN KEY (`id_Catégories`) REFERENCES `Catégories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Articles` (`id`, `Title`, `Description`, `Date_ajout`, `id_Catégories`, `picture`, `prix`) VALUES
(1,	'DELL OPTIPLEX 3020 SFF - WINDOWS 10 + ÉCRAN 22\"',	'Intel i5-4570 3.20 GHz / 8Go RAM DDR3 / 500Go HDD / Gigabit Ethernet / Windows 10 64 bits avec licence officielle Microsoft MAR',	'2022-11-20 13:45:39',	1,	'https://www.tradediscount.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/d/e/dell-3020-sff-i5-8go-500go-hdd-w10-ecran22.jpg',	'219€'),
(4,	'Ordinateur portable Dell XPS 13-9315',	'Ecran : 13,4\" (33,2 cm) Stockage : SSD 512 Go Processeur : Intel Core i7 1250U Mémoire vive : 16 Go',	'2020-11-22 00:00:00',	1,	'https://boulanger.scene7.com/is/image/Boulanger/5397184748336_h_f_l_0?wid=500&hei=500',	'1299,00€'),
(6,	'Apple MacBook Air 13,3\" M1 8Go 256Go Gris Sidéral',	'jcp',	'2020-11-22 00:00:00',	1,	'https://e-leclerc.scene7.com/is/image/gtinternet/0194252056073_1?op_sharpen=1&resmode=bilin&fmt=pjpeg&qlt=85&wid=450&fit=fit,1&hei=450',	'1039,00€');

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
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Mail` varchar(100) DEFAULT NULL,
  `Login` varchar(100) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Date_Creation` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

