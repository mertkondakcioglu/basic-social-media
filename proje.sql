-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.24-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2014-06-03 13:34:23
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for tablo
CREATE DATABASE IF NOT EXISTS `tablo` /*!40100 DEFAULT CHARACTER SET latin5 */;
USE `tablo`;


-- Dumping structure for table tablo.mesajlar
CREATE TABLE IF NOT EXISTS `mesajlar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gonderen_id` int(10) NOT NULL,
  `alici_id` int(10) NOT NULL,
  `icerik` varchar(50) NOT NULL,
  `tarih` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin5;

-- Dumping data for table tablo.mesajlar: ~6 rows (approximately)
/*!40000 ALTER TABLE `mesajlar` DISABLE KEYS */;
INSERT INTO `mesajlar` (`id`, `gonderen_id`, `alici_id`, `icerik`, `tarih`) VALUES
	(23, 16, 17, 'merhaba', '03 Haziran 2014 13:18'),
	(24, 16, 18, 'heyy', '03 Haziran 2014 13:18'),
	(25, 17, 16, 'biri var mı', '03 Haziran 2014 13:19'),
	(26, 17, 18, 'sen evet sen', '03 Haziran 2014 13:19'),
	(27, 18, 16, 'hahaha :D', '03 Haziran 2014 13:19'),
	(28, 18, 17, 'niye ben ', '03 Haziran 2014 13:20');
/*!40000 ALTER TABLE `mesajlar` ENABLE KEYS */;


-- Dumping structure for table tablo.muzikler
CREATE TABLE IF NOT EXISTS `muzikler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uye_id` int(10) NOT NULL,
  `ad` varchar(10) NOT NULL,
  `sarkıcıad` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin5;

-- Dumping data for table tablo.muzikler: ~3 rows (approximately)
/*!40000 ALTER TABLE `muzikler` DISABLE KEYS */;
INSERT INTO `muzikler` (`id`, `uye_id`, `ad`, `sarkıcıad`) VALUES
	(1, 16, 'Only Can J', 'Tupac'),
	(2, 17, 'Haydar Hay', 'Müslüm Gür'),
	(3, 18, 'Anlamazdın', 'Ayla Dikme');
/*!40000 ALTER TABLE `muzikler` ENABLE KEYS */;


-- Dumping structure for table tablo.profil
CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uye_id` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `cinsiyet` varchar(50) NOT NULL,
  `sehir` varchar(50) DEFAULT NULL,
  `dogumt` varchar(50) DEFAULT NULL,
  `meslek` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `hakkinda` varchar(50) DEFAULT NULL,
  `resim` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin5;

-- Dumping data for table tablo.profil: ~3 rows (approximately)
/*!40000 ALTER TABLE `profil` DISABLE KEYS */;
INSERT INTO `profil` (`id`, `uye_id`, `ad`, `soyad`, `cinsiyet`, `sehir`, `dogumt`, `meslek`, `email`, `tel`, `hakkinda`, `resim`) VALUES
	(4, 16, 'Mert', 'Kondakcıoğlu', 'Erkek', 'Antalya', '09.11.1996', 'Öğrenci', 'mertkondakcioglu@gmail.com', '0537 979 39 53', 'benim adım mert kafam çok sert :ddd', 'IMG_0117.JPG'),
	(5, 17, 'Seyis', 'Tüfek', 'Erkek', 'Rize', '18.09.1996', 'Konfeksiyon', 'sada@s.com', '0536 565 89 31', 'Çok kötü biriyim.', '150px-Kasimpasa_2012.png'),
	(6, 18, 'Sibel', 'Makarna', 'Kadın', 'Mardin', '12.02.1990', 'Aşçı', 'asdas@as.com', '0535 656 32 15', 'Farklı biri.', 'Desert.jpg');
/*!40000 ALTER TABLE `profil` ENABLE KEYS */;


-- Dumping structure for table tablo.uyeler
CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kulladi` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin5;

-- Dumping data for table tablo.uyeler: ~3 rows (approximately)
/*!40000 ALTER TABLE `uyeler` DISABLE KEYS */;
INSERT INTO `uyeler` (`id`, `kulladi`, `sifre`) VALUES
	(16, 'mert', '123'),
	(17, 'seyis', '123'),
	(18, 'sibel', '123');
/*!40000 ALTER TABLE `uyeler` ENABLE KEYS */;


-- Dumping structure for table tablo.videolar
CREATE TABLE IF NOT EXISTS `videolar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uye_id` int(10) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `uzunluk` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin5;

-- Dumping data for table tablo.videolar: ~3 rows (approximately)
/*!40000 ALTER TABLE `videolar` DISABLE KEYS */;
INSERT INTO `videolar` (`id`, `uye_id`, `ad`, `uzunluk`) VALUES
	(1, 16, 'Komik Kediler', '2:12'),
	(2, 17, 'Limon Yiyen Bebek', '0:37'),
	(3, 18, 'Leyla İle Mecnun', '5:32');
/*!40000 ALTER TABLE `videolar` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
