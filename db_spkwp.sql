-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_spkwp
CREATE DATABASE IF NOT EXISTS `db_spkwp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_spkwp`;

-- Dumping structure for table db_spkwp.tb_alternatif
CREATE TABLE IF NOT EXISTS `tb_alternatif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_game` varchar(100) DEFAULT NULL,
  `tahun_rilis` int(11) DEFAULT NULL,
  `rating` decimal(4,2) DEFAULT NULL,
  `tingkat_kesulitan` decimal(4,2) DEFAULT NULL,
  `metascore` int(11) DEFAULT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

-- Dumping data for table db_spkwp.tb_alternatif: ~50 rows (approximately)
/*!40000 ALTER TABLE `tb_alternatif` DISABLE KEYS */;
INSERT INTO `tb_alternatif` (`id`, `nama_game`, `tahun_rilis`, `rating`, `tingkat_kesulitan`, `metascore`) VALUES
	(1, 'DotA 2', 2013, 3.75, 3.99, 90),
	(2, 'The Witcher 3: Wild Hunt', 2015, 4.52, 3.09, 93),
	(3, 'Grand Theft Auto V', 2015, 4.32, 2.78, 96),
	(4, 'Monster Hunter: World', 2018, 4.18, 3.42, 88),
	(5, 'Half-Life 2', 2004, 4.39, 3.02, 96),
	(11, 'Portal 2', 2011, 4.43, 3.09, 95),
	(12, 'Hades', 2018, 4.43, 3.72, 92),
	(15, 'Silent Hill 2', 2002, 4.42, 3.07, 70),
	(17, 'World of Warcraft', 2003, 3.99, 3.01, 93),
	(18, 'Final Fantasy XIV Online: A Realm Reborn', 2013, 4.14, 3.01, 83),
	(36, 'Ragnarok Online', 2002, 3.87, 3.33, 79),
	(40, 'The Elder Scrolls V: Skyrim Special Edition', 2016, 4.13, 2.86, 74),
	(41, 'Crusader Kings II', 2012, 4.17, 3.75, 82),
	(42, 'Guild Wars 2', 2012, 4.06, 3.06, 90),
	(43, 'Assassinss Creed Odyssey', 2018, 3.65, 2.98, 86),
	(44, 'Star Wars: The Old Republic', 2011, 3.84, 2.95, 85),
	(45, 'The Elder Scrolls III: Morrowind', 2002, 4.26, 3.27, 89),
	(46, 'Team Fortress 2', 2007, 4.30, 3.21, 92),
	(47, 'Dragon Age: Inquisition', 2014, 3.84, 2.89, 85),
	(48, 'Minecraft', 2011, 4.29, 2.82, 93),
	(49, 'The Elder Scrolls IV: Oblivion', 2006, 4.18, 2.95, 94),
	(50, 'Overwatch', 2016, 3.93, 3.10, 91),
	(51, 'Metal Gear Solid V: The Phantom Pain', 2015, 4.13, 3.08, 91),
	(52, 'Dragonss Dogma: Dark Arisen', 2016, 4.22, 3.21, 81),
	(53, 'The Legend of Heroes: Trails in the Sky SC', 2015, 4.38, 3.12, 80),
	(54, 'Counter-Strike: Global Offensive', 2012, 3.73, 3.73, 83),
	(55, 'Heroes of the Storm', 2015, 3.77, 2.93, 86),
	(56, 'The Binding of Isaac: Rebirth', 2014, 4.24, 3.93, 86),
	(57, 'Fallout 4', 2015, 3.68, 2.79, 84),
	(58, 'The Sims 2', 2004, 4.08, 2.49, 90),
	(59, 'Euro Truck Simulator 2', 2013, 3.98, 2.68, 79),
	(60, 'The Sims 3', 2009, 4.03, 2.49, 86),
	(61, 'The Last Remnant', 2009, 3.88, 3.70, 66),
	(62, 'Dark Souls II: Scholar of the First Sin', 2015, 3.99, 3.93, 79),
	(63, 'Final Fantasy XV: Windows Edition', 2018, 3.73, 2.90, 85),
	(64, 'Assassinss Creed Origins', 2017, 3.73, 2.87, 84),
	(65, 'Payday ', 2013, 3.53, 3.61, 79),
	(66, 'Age of Empires II: HD Edition', 2013, 4.09, 3.29, 68),
	(67, 'Final Fantasy XIII-2', 2014, 3.56, 2.97, 75),
	(68, 'Borderlands ', 2012, 4.06, 3.13, 89),
	(70, 'Kingdoms of Amalur: Reckoning', 2012, 3.82, 2.70, 81),
	(71, 'Grand Theft Auto: San Andreas', 2005, 4.31, 3.15, 93),
	(72, 'Age of Empires II: The Age of Kings', 1999, 4.25, 3.26, 92),
	(73, 'Battlefield 2', 2005, 4.03, 3.07, 91),
	(74, 'Diablo III', 2012, 3.58, 3.06, 88),
	(75, 'Star Wars: Knights of the Old Republic II - The Si', 2005, 4.16, 2.96, 85),
	(76, 'Valkyria Chronicles', 2014, 4.14, 3.31, 85),
	(77, 'Age of Mythology', 2002, 4.05, 3.08, 89),
	(78, 'Hollow Knight', 2017, 4.29, 3.89, 87),
	(79, 'Mass Effect 3', 2012, 3.97, 2.88, 89);
/*!40000 ALTER TABLE `tb_alternatif` ENABLE KEYS */;

-- Dumping structure for table db_spkwp.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_spkwp.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`) VALUES
	(1, 'admin', 'admin123');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
